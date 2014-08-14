<!--Problem 8.	* Time Until New Year-->
<!--Write a PHP script TimeUntilNewYear.php. Use the built-in function getdate() to get the current date and time. -->
<!--Print how many hours, minutes and seconds are left until New Year and how many days, hours, minutes and seconds are left in a counter format. -->
<!--Look at examples below to get a better idea. The examples show the current date and time in "d-m-Y G:i:s" format.-->

<?php
$now = getdate();
$start_date = new DateTime("$now[year]-$now[mon]-$now[mday] $now[hours]:$now[minutes]:$now[seconds]");
$since_start = $start_date->diff(new DateTime('2015-01-01 00:00:00'));

$totalHours = ($since_start -> h) + ($since_start -> days)*24;
$totalMinutes = ($since_start -> i) + $totalHours * 60;
$totalSeconds = ($since_start -> s) + $totalMinutes * 60;
echo 'Hours until New Year: ' . $totalHours . '<br>';
echo 'Minutes until New Year: ' . $totalMinutes . '<br>';
echo 'Seconds until New Year: ' . $totalSeconds . '<br>';
printf('Days:Hours:Minutes:Seconds %d:%d:%d:%d', ($since_start -> days), ($since_start -> h), ($since_start -> i), ($since_start -> s));
?>