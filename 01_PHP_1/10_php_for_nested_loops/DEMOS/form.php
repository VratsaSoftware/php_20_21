<?php 
var_dump( $_POST );
if( !isset( $_POST['submit'] ) ){
?>
<form method="POST">
	<input type="submit" name="submit">
</form>
<?php 
} else {

?>

<p>The form was sent</p>

<?php } 