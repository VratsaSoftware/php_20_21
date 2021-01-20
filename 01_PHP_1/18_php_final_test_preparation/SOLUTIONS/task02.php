<?php 

$people = [
	['name' => 'Name 1', 'JF' => 52, 'D' => 60 ,'C' => 300, 'P' => 15,],
	['name' => 'Name 2', 'JF' => 10, 'D' => 6 ,'C' => 300, 'P' => 300,],
	['name' => 'Name 3', 'JF' => 25, 'D' => 6 ,'C' => 30, 'P' => 150,],
	['name' => 'Name 4', 'JF' => 5, 'D' => 10 ,'C' => 30, 'P' => 18,],
	['name' => 'Name 5', 'JF' => 22, 'D' => 60 ,'C' => 3, 'P' => 150,],
];

//R = ((JF+D)2+C*2)/P

$count = count( $people );
$average_r = 0;

for( $i = 0; $i < $count; $i++ ){
	$r = (($people[$i]['JF']+$people[$i]['D'])*2+$people[$i]['C']*2)/$people[$i]['P'];
	$people[$i]['R'] = $r;
	$average_r += $r;
}

$average_r = $average_r/$count;

$min_r = $people[0]['R'];
$min_ind = 0;

for( $j = 0; $j < $count; $j++ ){
	if( $min_r > $people[$j]['R'] ){
		$min_r = $people[$j]['R'];
		$min_ind = $j;
	}
}

?>

<table border="1">
	<thead>
		<tr>
			<th>Name</th>
			<th>JF</th>
			<th>Drinks</th>
			<th>C</th>
			<th>P</th>
			<th>R</th>
		</tr>
	</thead>
	<tbody>
		<?php for( $k = 0; $k < $count; $k++ ) { ?>
			<tr>
				<td><?= $people[$k]['name']; ?></td>
				<td><?= $people[$k]['JF']; ?></td>
				<td><?= $people[$k]['D']; ?></td>
				<td><?= $people[$k]['C']; ?></td>
				<td><?= $people[$k]['P']; ?></td>
				<td><?= $people[$k]['R']; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<?php 

echo $people[$min_ind]['name'] . ' has the lowest R =' . $people[$min_ind]['R'];