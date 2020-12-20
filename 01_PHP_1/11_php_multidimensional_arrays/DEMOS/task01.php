<?php 

$cars = [
	//[0]
	[
		'brand' => 'Volvo',
		'model' => 'V50',
		'year_of_production' => '2004',
		'price' => 5000,
		'cars_sold' => 5000
	],
	//[1]
	[
		'brand' => 'BMW',
		'model' => 'M5',
		'year_of_production' => 2010,
		'price' => 50000,
		'cars_sold' => 1000000
	],
	//[2]
	[
		'brand' => 'Mercedes',
		'model' => 'E63',
		'year_of_production' => 2010,
		'price' => 50000,
		'cars_sold' => 20000		
	]
];
// $car['newIndex']='new value';
// $car[] = 'new value';

$count = count( $cars );
$sum = 0;
$sum_profit = 0;
?>

<table border="1">
	<thead>
		<tr>
			<th>Brand</th>
			<th>Model</th>
			<th>YP</th>
			<th>Price</th>
			<th>Cars Sold</th>
			<th>Profit</th>
		</tr>
	</thead>
	<tbody>
<?php
for( $i = 0; $i < $count; $i++ ){

	$profit = $cars[$i]['price']*$cars[$i]['cars_sold'];
	$cars[$i]['profit'] = $profit;


	echo "<tr>";
		$sum += $cars[$i]['cars_sold'];
		$sum_profit += $cars[$i]['profit'];
	foreach( $cars[$i] as $key => $value ) {
		echo '<td>' . $value . '</td>';
		// if( is_int( $value ) && $key == 'cars_sold' ){
		// 	$sum += $value;
		// }
	}
	echo "</tr>";
}//end for


?>
<tr>
	<td>Total cars sold</td><td colspan="5"><?= $sum ?></td>
</tr>
<tr>
	<td>Total profit</td><td colspan="5"><?= $sum_profit ?></td>
</tr>
	</tbody>
</table>
