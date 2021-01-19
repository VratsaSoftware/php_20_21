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

	<form method="post" action="script.php">
		<?php $student_num = 1; ?>		
		<?php for( $i = 0; $i <= 3; $i++ ){ ?>
			<p>
				<label>Student <?=  $student_num++ ?></label>				
				<?= print_input('text', "students[$i][name]", "Name ..." )?>
			</p>
			<?php for( $j = 0; $j <= 3; $j++ ) { ?>
				<?php $data_num = 1; ?>
				<p>
					<label>Subgect and grade #<?= $data_num++ ?></label>
					<?= print_input('text', "students[$i][subject][$j]", "Subject ... ")?>				
					<?= print_input('text', "students[$i][grade][$j]", "Grade ... ")?>
				</p>
			<?php } ?>
			<hr>
		<?php } ?>
		
		<?= print_input('submit', "submit" )?>

	</form>
	
<?php 
	require_once('includes/footer.php');
?>