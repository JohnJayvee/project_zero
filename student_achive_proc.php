<?php
	include "perfect_function.php";

	$table_name = 'students';

	//get user ID from URL
	$id = $_GET['id'];

	
$status = $_POST['status'];

	$user_editedvalues = array (
			
			"status" => $status
			);

update($user_editedvalues, $id, $table_name);
header("Location: student_manage.php");
	$text = "User has successfully Alumni a student.";
		save_logs($text);
?>