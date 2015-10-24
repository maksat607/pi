<?php
include('session.php');



?>
<?php


$today = date("y-m-d");  
$day=date("d");  
//var_dump($day);
echo $day;
for ($x = 0; $x <= 7; $x++) {
	$time='2009-10-'.$x.'';
	$timestamp = strtotime($time);
	$day = date('D', $timestamp);
    echo "$time  $day<br>";
}
	$x=0;
while($day!='Mon'){

	$time='2009-10-'.$x.'';
	$timestamp = strtotime($time);
	$day = date('D', $timestamp);
    $x++;
}
echo $time." ".$x."<br>";
?>
