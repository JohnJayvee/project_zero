<?php
	include "perfect_function.php";

	$table_name = 'attendance_records';

	//get user ID from URL
	$id = $_GET['id'];

	
	$attendance_status = $_POST['attendance_status'];
	$attendance_day = $_POST['attendance_day'];
	if($attendance_day !=5){
		$attendance_day = 4;
	}
 	$excuse = $_POST['excuse'];

	if ($excuse!=5) {
	$excuse = 4;
}
	$reason = $_POST['reason'];

	$user_editedvalues = array (
			
			"attendance_status" => $attendance_status,
		"excuse" => $excuse,
			"reason" => $reason
	);

	update($user_editedvalues, $id, $table_name);
	header("Location: view_present.php");
	$text = "$whoami has successfully updated a user.";
		save_logs($text);
?>