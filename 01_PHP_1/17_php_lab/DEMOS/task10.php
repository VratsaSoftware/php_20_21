<?php
$people = [
	[
		'Names' => 'Ivan Ivanov Petrov',
		'Height' => 1.80,
		'Weight' => 90,	
	],
		[
		'Names' => 'Petar Petrov Ivanov',
		'Height' => 1.75,
		'Weight' => 75,	
	],
		[
		'Names' => 'Georgi Georgiev Jivkov',
		'Height' => 1.92,
		'Weight' => 104,
	],
		[
		'Names' => 'Dragomir Petkov Dimitrov',
		'Height' => 1.68,
		'Weight' => 70,		
	],
		[
		'Names' => 'Dimitar Nikolaev Kolev',
		'Height' => 1.70,
		'Weight' => 67,	
	],
];


$count = count( $people );
$average_h = 0;

$average_w = 0;
$bmi = 0;
$avg_bmi = 0;

for ( $i=0; $i < $count ; $i++ ) {
		
	$bmi = $people[$i]['Weight']/($people[$i]['Height']*$people[$i]['Height']);
	$people[$i]['bmi'] = round( $bmi, 2 );
	$average_w += $people[$i]['Weight'];
	$average_h += $people[$i]['Height'];
	$avg_bmi += $people[$i]['bmi'];
	
}
?>

<table border="1">
	<thead>
		<tr>
			<th>NAME</th>
			<th>HEIGHT</th>
			<th>WEIGHT</th>
			<th>BMI</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		for( $i = 0; $i < $count; $i++ ){ 
		?>
		<tr>
			<td><?= $people[$i]['Names'] ?></td>
			<td><?= $people[$i]['Height'] ?></td>
			<td><?= $people[$i]['Weight'] ?></td>
			<td><?= $people[$i]['bmi'] ?></td>
		</tr>
		<?php 
		}

		?>
		<tr>
			<td></td>
			<td>Avg height: <?= $average_h/$count ?></td>
			<td>Avg weight: <?= $average_w/$count ?></td>
			<td>Avg BMI: <?= $avg_bmi/$count ?></td>
		</tr>
		
	</tbody>
</table>