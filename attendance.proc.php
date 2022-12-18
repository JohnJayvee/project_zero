<?php 


session_start();
include "perfect_function.php";

$table_name = "attendance_records";

foreach ($_POST['attendance_status'] as $attendance_status {

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$strand = $_POST['strand'];
$section = $_POST['section'];
$date = date('y-m-d h:i:s');
}


$attendance_data = array(
	"studid" => $studid,
			"fname" => $fname, 
			"lname" => $lname, 
			"strand" => $strand,
			"section" => $section,
			"date" => $date,
			"attendance_status" => $attendance_status
			
);
insert($attencdance_data, $table_name);
header("Location: view_attendance.php");
$text = "User $username has successfully added a attendance.";
		save_logs($text);
?>