<?php
/**
 * Email Template - Custom Post Type
 *
 */


namespace BetterSharingWP\AdminScreens;

use BetterSharingWP\OptionData;


class EmailTemplate
{
    /**
     * Template variables
     * allow the user to set his values
     * in the emails to send
     * 
     * static property
     *
     * @var arr
     */
    private static $template_variables;


    /**
     * Used to store
     * the Email Template CPT
     * result after validating
     * the CPT add/edit 
     * form data. 
     * Its value is changed to true
     * when the data didn't pass the validation
     *
     * @var boolean
     */
    private $save_template_as_draft = false;   
    
    /**
     * Default email body
     * seen in Add an Email Template form
     * 
     * @var str
     */
    private $default_email_body;

    /**
     * Default email subject
     * seen in Add an Email Template form
     *
     * @var str
     */
    private $default_email_subject;

    /**
     * Email Subject for the CPT Preview
     * 
     * @var str
     */
    private $preview_email_subject;

    /**
     * Email Reply To for the CPT Preview
     * 
     * @var bool
     */

    private $preview_reply_to;
   
    public function __construct() {

        add_action( 'init', array( $this, 'register_email_template_cpt' ) );
        
        $this->set_default_email_body();
        $this->set_default_email_subject();

        $this->init();
    }

    /**
     * Load Email Template
     * Hooks
     * 
     * @return void
     */
    public function init() {

        add_action('add_meta_boxes', array( $this, 'dynamic_add_email_subject_metabox' ) );
        add_action('add_meta_boxes', array( $this, 'dynamic_add_reply_to_metabox' ) );
        add_action('add_meta_boxes', array( $this, 'dynamic_add_template_variables_metabox' ) );
                
        add_action('pre_post_update', array( $this, 'cpt_validate' ), 10, 2 );
        add_action('save_post', array( $this, 'save_email_template_meta_data' ) );
        add_action('admin_notices', array( $this, 'email_template_notifications' ), 10, 1 );
        
        add_action('admin_enqueue_scripts', array( $this, 'my_admin_enqueue_scripts' ) );
        add_action('admin_footer', array( $this, 'toggle_publish_button' ) );
        
        add_action('edit_form_after_title', array( $this, 'edit_form_after_title' ) );
        add_filter('user_can_richedit', array( $this, 'disable_richedit_for_cpt' ) );
        add_filter('wp_editor_settings', array( $this, 'disable_media_buttons_for_cpt' ) ); 
        add_filter('default_content', array( $this, 'set_default_editor_content' ) );

        add_filter('use_block_editor_for_post_type', array( $this, 'disable_gutenberg_posts' ), 10, 2 );     

        add_filter('manage_posts_columns', array( $this, 'add_id_column_to_admin_list' ), 5 );
        add_filter('manage_edit-bswp_email_template_sortable_columns', array( $this, 'set_sortable_id_column' ) );
        add_action('manage_posts_custom_column', array( $this, 'print_id_column_content' ), 5, 2 );

        add_filter( 'the_preview', [$this, 'modify_email_template_preview'], 10, 2 );
        add_filter( 'pre_get_posts', [$this, 'update_published_cpt_preview'] );
    }

    /**
     * Registers
     * the Email Template as a CPT
     *
     * @return void
     */
    public function register_email_template_cpt() {

        $labels = array(
            'name'          => __('Email Template', 'bswp_email_template'),
            'singular_name' => __('Email Template', 'bswp_email_template'),
            'add_new'       => __('Add Email Template', 'bswp_email_template'),
            'add_new_item'  => __('Add New Email Template', 'bswp_email_template'),
            'edit_item'     => __('Edit Email Template', 'bswp_email_template'),
            'new_item'      => __('New Email Template', 'bswp_email_template'),
            'view_item'     => __('View Email Template', 'bswp_email_template'),
            'search_items'  => __('Search Email Templates', 'bswp_email_template'),
            'not_found'     => __('No Email Templates found', 'bswp_email_template'),
            'not_found_in_trash' => __('No Email Templates found in Trash', 'bswp_email_template'),
            'menu_name'     => __('Email Templates', 'bswp_email_template'),
        );
        $args = array(
            'labels'        =>  $labels,
            'description'   => __('BSWP Email Template custom post type', 'bswp_email_template'),
            'public'        => true,
            'hierarchical'  => false,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'show_ui'               => true,
            'show_in_menu'          => 'better-sharing-wp',
            'show_in_nav_menus'     => true,
            'menu_position'         => 1,
            'capability_type'       => 'post',
            'supports'              => array('title', 'editor', 'revisions'),  
            'has_archive'           => false,
            'delete_with_user'      => false,
            'show_in_rest'          => true
        );

        register_post_type('bswp_email_template', $args);
    }

    /**
     * Disable the Gutenberg Page builder
     * for the Email Template CPT edit screen
     * used in the WP add_filter with 
     * the use_block_editor_for_post_type hook
     *
     * @param str $current_status
     * @param str $post_type
     * 
     * @return str
     */
    public function disable_gutenberg_posts( $current_status, $post_type ) {
        
        // Disabled post types
        $disabled_post_types = array( 'bswp_email_template' );
       
        if ( in_array( $post_type, $disabled_post_types, true ) ) {

            $current_status = false;
        }

        return $current_status;
    }

    /**
     * Set the value for the 
     * $default_email_body
     * class propery
     *
     * @return void
     */
    public function set_default_email_body() {

        $default_content  = "<h3>{{ greeting }}</h3>\r\n";
		$default_content .= "<p>{{ sender_custom_message }}</p>\r\n";
        $default_content .= "<p>Please, follow the link {{ referral_link }}</p>\r\n";       
        $default_content .= "<p><br/><br/></p>\r\n";
		$default_content .= "<p>{{ sender_first_name }} {{ sender_last_name }}</p>\r\n";
		
        $this->default_email_body = $default_content;
    }

    /**
     * Set a value for the
     * $default_email_subject
     * class property
     *
     * @return void
     */
    public function set_default_email_subject() {

        $this->default_email_subject = "An interesting page for you {{ recipient_first_name }}";

    }

    /**
     * Get the value of
     * $default_email_body
     * class property
     *
     * @return str
     */
    public function get_default_email_body() {

        return $this->default_email_body;
    }

    /**
     * Get the value of
     * $default_email_subject
     * class property
     *
     * @return void
     */
    public function get_default_email_subject() {

        return $this->default_email_subject;
    }

    /**
     * The CPT Content field
     * in the Add New Email Template form
     * is prepolutated
     * with a default email body
     * used in the WP add_filter with
     * the default_content hook
     * 
     * @param str $content - the base post content
     * 
     * @return str modified Email template CPT content
     */
    public function set_default_editor_content( $content ) {

        $current_screen = get_current_screen();    
        
        if ( $current_screen->post_type == 'bswp_email_template' ) :

            $content = $this->default_email_body;
        endif;

        return $content;
    }

    /**
     * Add the Email Template CPT
     * metabox for the email subject
     * Used in add_action WP function with
     * the add_meta_boxes hook
     * 
     * @return void
     */    
    public function dynamic_add_email_subject_metabox() {

        add_meta_box(
            'bswp_email_subject',
             __('Email Subject'), 
             array($this, 'load_email_subject_metabox'), 'bswp_email_template'
            );
    }
    
    /**
     * Display the Email Subject field
     * in the Email Template CPT
     * add/edit form
     * 
     * @return void
     */
    public function load_email_subject_metabox() {

        global $post;

        $email_subject = '';
        $email_subject = get_post_meta( $post->ID, 'bswp_email_subject', true );

        if( empty( $email_subject ) ) { $email_subject = $this->default_email_subject; }    

        ?>        
        <div class="bswp__email-subject">
            <input 
                type="text" 
                id="email-subject" 
                name="email_subject" 
                value="<?php echo $email_subject ?>">
        </div>
        <?php
    }

     /**
     * Add the Email Template CPT
     * metabox for the reply to email option
     * Used in the add_action WP function with
     * the add_meta_boxes hook
     * 
     * @return void
     */
    public function dynamic_add_reply_to_metabox() {

        add_meta_box(
            'bswp_reply_to', 
            __('Reply to'), 
            array( $this, 'load_reply_to_metabox' ), 'bswp_email_template'
        );
    }

    /**
     * Display the Email Reply To field
     * in the Email Template CPT
     * add/edit form
     * 
     * @return void
     */
    public function load_reply_to_metabox() {

        global $post;

        $reply_to = get_post_meta($post->ID, 'bswp_reply_to', true);

        $checked = '';

        if( isset( $reply_to) ): 

            if( $reply_to == 1 ): 

                $checked = 'checked=true';
            endif;
        endif;

        ?>
        <label for="reply-to">        
            <input 
                type="checkbox" 
                id="reply-to" 
                name="reply_to" 
                value="1" 
                <?php echo $checked; ?>>
                Use Sender's name and email for "Email Reply to"
        </label>
        <?php
    }

    /**
     * Add the Email Template CPT
     * metabox for the Template variables
     * Used in the add_action WP function with
     * the add_meta_boxes hook
     * 
     * @return void
     */
    public function dynamic_add_template_variables_metabox() {

        add_meta_box(
            'bswp_template_variables', 
                    __('Template Variables'), 
                    array($this, 'load_template_variables_metabox'), 
                    'bswp_email_template',
                    'side'
                );
    }

    /**
     * Display the Template Variables field
     * in the Email Template CPT
     * add/edit form
     * 
     * @return void
     */
    public function load_template_variables_metabox() {

         self::$template_variables = include BETTER_SHARING_PATH . 'includes/config/email_template_variables.php';

         $copy_icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><g data-name="Layer 3"><path d="M40.63 13H12.38a4.69 4.69 0 00-4.68 4.67v39.64A4.69 4.69 0 0012.38 62h28.25a4.69 4.69 0 004.69-4.69V17.67A4.69 4.69 0 0040.63 13zm2.69 44.33A2.69 2.69 0 0140.63 60H12.38a2.69 2.69 0 01-2.68-2.69V17.67A2.69 2.69 0 0112.38 15h28.25a2.69 2.69 0 012.69 2.69z"/><path d="M51.74 2H23.26a4.58 4.58 0 00-4.58 4.57v3.55a1 1 0 002 0V6.57A2.58 2.58 0 0123.26 4h28.48a2.57 2.57 0 012.56 2.57v39.87A2.58 2.58 0 0151.74 49H48.5a1 1 0 000 2h3.24a4.58 4.58 0 004.57-4.58V6.57A4.57 4.57 0 0051.74 2z"/></g></svg>';
         
         if( self::$template_variables ) :
            
            foreach( self::$template_variables as $variable_name => $variable_description ) : 
            
            ?>
                <p class="bswp__template-variable-container">
                    <span class="bswp__tv-content">
                        &#123;&#123; <?=  $variable_name ?> &#125;&#125;
                    </span>
                    <a href="#" class="bswp__copy-variable">
                        <span><?= $copy_icon ?></span>
                    </a>
                    <a href="#" title="<?= $variable_description ?>" class="bswp__variable-info">
                        <span class="dashicons dashicons-info"></span>
                    </a>
                </p>
            <?php
            
            endforeach;
        
        endif;
        
        $this->copy_variable_to_content();
    }

    /**
     * Disable the Rich Editor functionality
     * for the Email Template CPT edit screen
     * used in the WP add_filter with 
     * the user_can_richedit hook
     *
     * @param boolean $default
     * 
     * @return boolean
     */
    public function disable_richedit_for_cpt( $default ) {    
        
        global $post;
    
        if ( 'bswp_email_template' == get_post_type( $post ) ) {
            
            return false;
        }

        return $default;
    }

    /**
     * Disable the Media Buttons functionality
     * for the Email Template CPT edit screen
     * used in the WP add_filter with 
     * the wp_editor_settings hook
     *
     * @param array $settings - the editor settings
     * 
     * @return array the modified editor settings
     */
    public function disable_media_buttons_for_cpt( $settings ) {

        $current_screen = get_current_screen();    
       
        $post_types = array( 'bswp_email_template' );
    
        if ( ! $current_screen 
            || ! in_array( $current_screen->post_type, $post_types, true ) ) {
            
                return $settings;
        }
        
        $settings['media_buttons'] = false;
        
        return $settings;
    }

    /**
     * Modify the Email Template CPT 
     * default label for post content field
     * in the Email Template CPT edit screen
     * used in the WP add_action with 
     * the edit_form_after_title hook
     *
     * @param array $settings - the editor settings
     * 
     * @return array the modified editor settings
     */
    public function edit_form_after_title() {

        if ('bswp_email_template' == get_post_type()) :

        ?>

            <h2 class="postbox wp-heading-inline" style="margin-top: 20px;">Email Body</h2>

        <?php

        endif;
    }

    /**
     * Copy the selected 
     * Email Template CPT
     * Template Variable 
     * to the Clipboard
     *
     * @return void
     */
    public function copy_variable_to_content() {
        ?>
        <script>
        (function ($) {
            $('.bswp__copy-variable').on('click', function(e) {
                e.preventDefault();
                var varContent = $(this).parents('.bswp__template-variable-container')
                                .find('.bswp__tv-content')
                                .text()
                                .trim(),
                    clipboard = navigator.clipboard;
                    clipboard.writeText( varContent );
            })
        })(jQuery);
        </script>
        <?php 
    }

    /**
     * Save the Email Template CPT
     * meta data in the database
     *
     * @param int $post_id
     * 
     * @return void
     */
    public function save_email_template_meta_data( $post_id ) {     
        
        if( $this->save_template_as_draft ) {
          
            remove_action('save_post', array( $this, 'save_email_template_meta_data' ) );
            
            wp_update_post(
                array(
                    'ID' => $post_id,
                    'post_status' => 'draft',
                 )
            );
          
           add_action('save_post', array( $this, 'save_email_template_meta_data' ) );
            
        }

        if( isset( $_POST['email_subject'] ) )
            update_post_meta( 
                $post_id, 
                'bswp_email_subject', 
                sanitize_text_field( $_POST['email_subject'] ) 
            );
       
        if( isset( $_POST['reply_to'] ) )
            update_post_meta( 
                $post_id, 
                'bswp_reply_to', 
                sanitize_text_field( $_POST['reply_to'] ) 
            );
    }

    /**
     * Check the database
     * for an existing Email Template Title
     *
     * @param int $post_id
     * @param array $post_data
     * 
     * @return void
     */
    public function cpt_validate( $post_id, $post_data ) {  
        
        if ( 'bswp_email_template' == get_post_type() ) {
           
            if( !empty( $post_data['post_status'] ) ) {

                if( $post_data['post_status'] != 'trash' ) {

                    $error_messages = [];
                    $email_subject = $_POST['email_subject'];
            
                    if ( ( strpos( $email_subject, '{{ greeting }}' ) !== false ) 
                        || ( strpos( $email_subject, '{{ referral_link }}' ) !== false ) 
                        || ( strpos( $email_subject, '{{ sender_custom_message }}' ) ) ) { 

                            $error_messages[] = __('Please, use only sender/recipient name(s) template variables!');                
                    }            
        
                    if( !empty( $post_data['post_title'] ) ) {

                        $duplicate_template_title = get_page_by_title( $post_data['post_title'], OBJECT, 'bswp_email_template' );
                    
                        if( !empty( $duplicate_template_title && $duplicate_template_title->ID != $post_id ) ) {   

                            $error_messages[] = __('Email Template with the <b>same title</b> already exists!');
                        }
                    }
               
                    if( !empty( $error_messages ) ) {       

                        $this->save_template_as_draft = true;
                        update_option( 'bswp_email_template_notifications', json_encode( array( 'error', $error_messages ) ) ); 
                    
                        return false; 
                    }            
                }

            }

            return true;
        }
    }  

    /**
     * Override default 
     * admin notices.
     * Used in the WP add_action with
     * the admin_notices hook
     * 
     * @return void
     */
    public function email_template_notifications() {
        
        if ( 'bswp_email_template' == get_post_type() ) {

            $notifications = get_option('bswp_email_template_notifications');

            if ( !empty( $notifications ) ) {

                if ( 'bswp_email_template' == get_post_type() ) { 

                    $notifications = json_decode($notifications);
                    
                    foreach( $notifications[1] as $error_message ) {

                        echo '<div class="notice notice-error is-dismissible">';
                        echo '<p>' . __( $error_message ) . '</p>';
                        echo '</div>';  
                    }

                    echo '<div class="notice notice-warning is-dismissible">';
                    echo '<p>' . __('The Email Template was saved as <b>draft</b>') . '</p>';
                    echo '</div>';                  
                  ?>
                    <style>
                        .updated {
                            display: none
                        }
                    </style>
                  <?php

                    update_option('bswp_email_template_notifications', false);
                }
            }
        }
    }
        
    /**
     * Activate/Deactivate the CPT Publish Button 
     * based on form validation result
     * 
     * @return void
     */
    public function toggle_publish_button() {

        $screen = get_current_screen();

        if( $screen->base == 'post' && get_post_type() == 'bswp_email_template' ) :

        ?>
        <script>
            (function ($) {
                var btn = $('#publish');
                if( !$('#title').val() || !$('#content').val() || !$('#email-subject').val()) {

                    btn.attr('disabled', true)
                    btn.attr('title', 'Please, fill in the form fields!')
                }

                $('#post').on('input', ('#title, #content, #email-subject'), function(e) {

                    let templateVarsErr = false, emailSubject = $('#email-subject').val(),
                        inputsErr = true,
                        errorMsg = "<?php echo __('Please, fill in the form fields!') ?>";

                    if( $('#title').val().length && $('#content').val().length && $('#email-subject').val().length ) {
                       inputsErr = false;
                    } 

                    if( emailSubject.indexOf('{{ greeting }}') !== -1 
                            || emailSubject.indexOf('{{ referral_link }}') !== -1 
                            || emailSubject.indexOf('{{ sender_custom_message }}') !== -1 ) {
                        templateVarsErr = true;                        
                    }                

                    if( templateVarsErr || inputsErr ) {

                        if( templateVarsErr ) { 
                            errorMsg =  "<?php echo __('Please, use only recipient/sender name(s) variables in Email Subject field!') ?>"; 
                        }
                        btn.attr('disabled', true)
                        btn.attr( 'title',  errorMsg )
                    } else {

                        btn.attr('disabled', false)
                        btn.attr( 'title', '' )
                    }
                })
            })(jQuery);
        </script>
        <?php
        endif;
    }

    /**
     * Add ID Column to
     * Admin Email Template CPTs List. 
     * Used in the WP add_filter with 
     * the 'manage_posts_columns hook
     * 
     * @param array $columns
     * 
     * @return array modified $columns
     */
    public function add_id_column_to_admin_list( $columns ) {

        if ( 'bswp_email_template' == get_post_type() ) {

            $columns = array(                
                'cb' => $columns['cb'], 
                'bswp_email_template_id' => __('ID'),   
                'title' => __('Title'),
                'date' => __('Date'),    
            );
        }   

        return $columns;
    }

    /**
     * Print the value of the 
     * Email Template ID
     * in the Admin Email Template CPTs List. 
     * Used in the WP add_action with
     * the manage_posts_custom_column hook
     * 
     * @param string $column 
     * @param int $id
     */
    public function print_id_column_content( $column, $id ) {
        if ( 'bswp_email_template' == get_post_type() ) {    
            if ( 'bswp_email_template_id' == $column ) {
                echo $id;
            }
        }
    }

    /**
     * Make the CPT ID column
     * sortable. 
     * Used in the WP add_filter with
     * the manage_edit-bswp_email_template_sortable_columns hook
     * 
     * @param array $columns
     * 
     * @return array modified $columns
     */    
    public function set_sortable_id_column( $columns ) {

        if ( 'bswp_email_template' == get_post_type() ) {

            $columns['bswp_email_template_id'] = 'email_template_id';            
        }

        return $columns;
    }


   /**
    * Disable the autosave functionality
    * for the Email Template CPT 
    * 
    * @return void
    */
    public function my_admin_enqueue_scripts() {

        if ( 'bswp_email_template' == get_post_type() ) {

            wp_dequeue_script('autosave');
        }
    }

    /**
     * get all EmailTemplate CPTs
     * with status published
     */

     public static function get_all_email_templates(){
        return get_posts([
            'post_type' => 'bswp_email_template',
            'post_status' => 'publish',
            'numberposts' => -1
        ]);
    }

    /**
     * Modifies Email Template Preview
     * content
     * to give the user idea
     * of how the sent email with 
     * the current email template
     * will look like
     * including the From, Email Subject and Reply To information 
     *
     * @param object $post_preview
     * @param [type] $query
     * @return $post_preview modified EmailCpt preview
     */
    function modify_email_template_preview( $post_preview, $query ){

        if ( 'bswp_email_template' == $post_preview->post_type ) {
           
            //both values are set as class props in order to be accessible from within other methods
            $this->preview_email_subject = get_post_meta( $post_preview->ID, 'bswp_email_subject', true );
            $this->preview_reply_to = get_post_meta( $post_preview->ID, 'bswp_reply_to', true );

            //check if this is a published CPT's preview, 
            //then the way the preview is handled it different
            if( isset($_GET['preview_nonce']) ) :
            
                //the preview is for a published CPT and its data is retrieved from the DB
                //the content to be displayed as a preview is to be treated as a post content
                add_filter( 'the_content', [$this, 'filter_the_content'], 1 );
        
            else :

                //the preview is fo unpublished CPT, can be modified directly
                $modified_preview_content = $this->modify_preview_content( $post_preview->post_content );

                //replace the preview content with the modified one
                $post_preview->post_content = $modified_preview_content;
            endif;
        
        }
        
	    return $post_preview;
    }

    /**
     * Already Published CPT's 
     * preview content is loaded from the database
     * Has to be treated as Post Content
     * the_content hook's callback function
     *
     * @param str $content
     * @return void
     */
    public function filter_the_content( $content ){
        
        $modified_content = $this->modify_preview_content( $content );

        return $modified_content;
    }

    /**
     * Sets the preview content
     * for the Email Template CPT
     *
     * @param str $data the preview content of the draft or 
     * the content of the published post
     * @return str $email_preview
     */
    function modify_preview_content( $data ) {

        $email_preview = '';
        //the 'header' of the email
        $email_preview .= $this->set_email_preview_header();
        //the 'body' of the email
        $email_preview .= $this->set_email_preview_body( $data );

        return $email_preview;
    }

    /**
	 * Replace Email Template CPT
	 * template variables with
	 * default values in the email preview body
	 * 
	 * @param string $parsable the template string containing the variables to be parsed
	 * 
	 * @return string
	 */
	public function set_email_preview_body( $parsable ){

        $default_refferal_link = get_site_url() . '/post-to-share';

        $custom_message = '<p>My custom message</p>';

        $parsable = str_replace( '{{ greeting }}', 'Hey', $parsable );
        $parsable = str_replace( '{{ referral_link }}', $default_refferal_link, $parsable );
        $parsable = str_replace( '{{ recipient_first_name }}', 'RecipientFirstName', $parsable );
        $parsable = str_replace( '{{ recipient_last_name }}', 'RecipientLastName', $parsable );
        $parsable = str_replace( '{{ sender_first_name }}', 'SenderFirstName', $parsable );
        $parsable = str_replace( '{{ sender_last_name }}', 'SenderLastName', $parsable );
        $parsable = str_replace( '{{ sender_custom_message }}', $custom_message, $parsable );
		
		return $parsable; 
	}

    /**
     * Replaces template variables
     * in the email preview subject
     * 
     * @return string
     */

    public function set_email_preview_subject(){        

        $preview_email_subject = $this->preview_email_subject;
        
        if( !empty( $preview_email_subject ) ){

            $preview_email_subject = str_replace( '{{ recipient_first_name }}', 'RecipientFirstName', $preview_email_subject );
            $preview_email_subject = str_replace( '{{ recipient_last_name }}', 'RecipientLastName', $preview_email_subject );

            return "<p>Email Subject: {$preview_email_subject}</p>";
        }
        
        return $preview_email_subject;
    }

    /**
     * Sets a preview 
     * for the Email to be Sent Header
     * 
     * @return string
     */

    public function set_email_preview_header(){
        $header = "";
        //set website
        $header .= "<p>From: SenderFirstName SenderLastName";

        if( $this->get_website_name_option() ) :

            $header .= " via " . $this->get_website_name_option();
        endif;

        $header .= " &lt;sender@mail.com&gt;</p>";
        $header .= "<p>To: RecipientFirstName RecipientLastName &lt;recipient@mail.com&gt;</p>";
        //email subject if any
        $header .= $this->set_email_preview_subject();
        //reply to if is set to true
        if( $this->preview_reply_to ) :

            $header .= "<p>Reply To: SenderFirstName SenderLastName &lt;sender@mail.com&gt;</p>";
        endif;

         return $header;
    }

    /**
     * Get Website Name 
	 * if any set as an option
	 * in BSWP plugin settings	
	 * 
	 * @return string|bool website name or false
	 */

	public function get_website_name_option(){

		$option_data = new OptionData( 'core' );
	
		if ( ! is_wp_error( $option_data ) ) :

			$this->option_data = $option_data;
        endif;
		
		if( $this->option_data->get( 'websiteName' ) ) :			
			
			return $this->option_data->get( 'websiteName' );
		endif;	
				
		return false;
	}

	/**
     * Allows previewing 
     * the Published CPT 
     * updates before 
     * update button is pressed
     *
     * @param object $query
     * @return void
     */
	function update_published_cpt_preview( $query ) {
        	
	    if( $query->is_main_query() && array_key_exists('preview_id', $_GET) ) {
		    $post_types = array( 'bswp_email_template' );
			$query->set( 'post_type', $post_types );
	    }	
    }
}

