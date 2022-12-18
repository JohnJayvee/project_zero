<?php
include "perfect_date.php";

$date = "05/11/18";
echo $date;
echo "<hr>";

//make timestamp
$date_in_secs = make_timestamp_from_datepicker_us($date);
echo $date_in_secs;

echo "<hr>";

echo get_nice_date($date_in_secs, 'mini');

?>