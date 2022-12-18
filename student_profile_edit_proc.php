<?php
	include "perfect_function.php";

	$table_name = 'students';

	//get user ID from URL
	$id = $_GET['id'];

	
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];

	

	$user_editedvalues = array (
			
			"fname" => $fname,
			"mname" => $mname,
			"lname" => $lname,
			"gender" => $gender
			
	);

update($user_editedvalues, $id, $table_name);
	$whoami = _get_username_from_id($_SESSION['id']);
	
	header("Location: student_manage.php");
	$text = "$whoami has successfully updated a student.";
		save_logs($text);
?>