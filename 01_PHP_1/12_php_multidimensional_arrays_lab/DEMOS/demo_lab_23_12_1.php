<?php
//двумерен масив -Три имена, ръст,тегло за 5 човека.//Изчислете индекс на телесна маса ИТМ (итм = тегло/височина²) за вс един от тях и го запазете в масива.//а. Изчислете средното тегло на хората за които пазите информация в масива.// изчислете средния ръст на хората//средната стойност на итм на хората.$itm = 0;

$people = [
          [
            'fn' => 'Georgi',
            'sn' => 'Plamenov',
            'ln' => 'Petrov',
            'hg' => '174',
            'wg' => '105',
           ],
          [
            'fn' => 'Petq',
            'sn' => 'Stoqnova',
            'ln' => 'Valentinova',
            'hg' => '175',
            'wg' => '60',
          ],
            [
              'fn'=> 'Cvetomir',
              'sn'=>'Ivailov',
              'ln'=>'Gospodinov',
              'hg'=>'178',
              'wg'=>'85',
            ],[
              'fn'=>'Plamen',
              'sn'=>'Georgiev',
              'ln'=>'Georgiev',
              'hg'=>'180',
              'wg'=>'90',       
            ],
            [   
              'fn'=>'Cura',
              'sn'=>'Dinkova',
              'ln'=>'Vlahova',
              'hg'=>'170',
              'wg'=>'65',
            ]
          ];

$count = count( $people );
$total_weight = 0;
$min_weight = $people[0]['wg'];
$min_ind = 0;

for ( $i = 0; $i < $count ; $i++) {
  
  $itm = (($people[$i]['wg']/$people[$i]['hg'] )*2);
  $people[$i]['itm'] = $itm;
  $total_weight += $people[$i]['wg'];
  if( $people[$i]['wg'] < $min_weight ){
    $min_weight = $people[$i]['wg'];
    $min_ind = $i;
  }

}

echo $avg_weight = $total_weight/$count;

echo "<table border='1'>";
?>
<thead>
  <tr>
    <td>Name</td>
    <td>Second Name</td>
    <td>Last Name</td>
    <td>Height</td>
    <td>Weight</td>
    <td>ITM</td>
  </tr>
</thead>
<tbody>
  <?php 

for( $k = 0; $k < $count; $k++ ){
  echo "<tr>";
    foreach( $people[$k] as $key => $value  ){
      echo "<td>" . $value . "</td>";
    }  
  echo "</tr>";
}

  ?>

</tbody>
<?php

echo "</table>";

?>

<p>The man with the least weight - <?php echo $min_weight ?> is: <?php echo $people[$min_ind]['fn'] ?></p>