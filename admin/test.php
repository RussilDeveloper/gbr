<?php
$interval = 1800; // Interval in seconds

$date_first     = "07:00";
$date_second    = "22:30";

$time_first     = strtotime($date_first);
$time_second    = strtotime($date_second);

for ($i = $time_first; $i < $time_second; $i += $interval)
    echo date('H:i', $i) . "<br />";
?>