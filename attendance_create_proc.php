<?php
include "perfect_function.php";

$table_name = "attendance_records";
$studid = $_POST['studid'];
$attendance_status = $_POST['attendance_status'];
$date = date('y-m-d');

$user_data = array(
	//columname from table => value from post

	"studid" => $studid,
	"attendance_status" => $attendance_status,
	"date" => $date
);

insert($user_data, $table_name);
header("Location: attendance_chec.php");
$text = "$whoami has successfully added an attendance.";
save_logs($text);
?>