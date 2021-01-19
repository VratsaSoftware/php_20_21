<?php 
// Създайте програма, при която потребителя въвежда трите имена на 10
// ученика, и срочни оценки по 6 предмета, с полета за въвеждане на оценката и
// името на предмета. Програмата изчислява средния успех на всеки ученик и
// средния успех на групата ученици.
// Използвайте функции за отпечатване на формата и за обработка на
// информацията, постъпваща от потребителя.
?>
<?php 
	require_once('includes/header.php');

?>
<pre>
	<?php var_dump( $_POST['students']) ?>
</pre>

<?php if( isset( $_POST ) ) { ?>
	<?php if( !empty( $_POST['students'] ) ) { ?>
		<?php print_table(['Name', 'Subjects', 'Grades', 'Average Score'], $_POST['students'] ); ?>
	<?php } ?>
<?php } ?>


	
<?php 
	require_once('includes/footer.php');
?>