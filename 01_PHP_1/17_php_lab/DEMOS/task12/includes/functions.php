<?php 

function print_input( $type, $name, $placeholder = '' ){
	return "<input type=$type name=$name placeholder=$placeholder />";
}


function print_list( $array ){
	?>
	<ul>
	<?php 
	foreach( $array as $a ){
		?>
		<li><?= $a ?></li>
		<?php
	}
	?>
	</ul>	
	<?php 
}

function calculate_average_value( $arr ){
	$sum = 0;
	$count = count( $arr );
	foreach ( $arr as $value ) {
		$sum += $value;
	}

	return $sum/$count;
}

function print_table( $data_header, $data_arr ){
	
	$group_average_score = 0;
	$group_count = count( $data_arr );

	?>
	<table border="1">
		<thead>
			<tr>
				<?php foreach( $data_header as $dh ){?>
					<th><?= $dh ?></th>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $data_arr as $da ){?>
					<tr>
						<td>
							<?= $da['name'] ?>
						</td>
						<td>
							<?= print_list( $da['subject']) ?>
						</td>
						<td>
							<?= print_list( $da['grade']) ?>
						</td>
						<td>
							<?php $average_score = calculate_average_value( $da['grade'] ) ?>
							<?php $group_average_score += $average_score ?>
							<?= $average_score ?>
						</td>
					</tr>
			<?php } ?>
			<tr>
				<td colspan="3">Group Average score: </td>
				<td>
					<?php echo $group_average_score/$group_count;  ?>
				</td>
			</tr>
		</tbody>		
	</table>
	<?php 
}

