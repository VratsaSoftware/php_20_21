<?php 

$today = date('Y-m-d');
$to_check = date('Y-m-d', strtotime($today . '-365 days' ));
echo $to_check;