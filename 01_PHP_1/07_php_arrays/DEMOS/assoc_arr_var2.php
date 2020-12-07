<?php 

// $assoc_arr = [];
$assoc_arr = [
	'name' => 'Pesho',
	'age'  => 25,
	'address' => 'Vratsa',
	'married' => 'false',
];

// echo $assoc_arr['name'], $assoc_arr['age'], $assoc_arr['address'];

?>

<table border="1">
	<tr>
		<td>name</td>
		<td><?= $assoc_arr['name']; ?></td>
	</tr>
	<tr>
		<td>age</td>
		<td><?= $assoc_arr['age']; ?></td>
	</tr>
	<tr>
		<td>address</td>
		<td><?php echo $assoc_arr['address']; ?></td>
	</tr>
	<tr>
		<td>Is married</td>
		<td><?php echo $assoc_arr['married']; ?></td>
	</tr>
</table>