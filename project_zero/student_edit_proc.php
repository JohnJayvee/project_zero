<?php
	include "perfect_function.php";

	$table_name = 'students';

	//get user ID from URL
	$id = $_GET['studid'];

	$studid = $_POST['studid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$strand = $_POST['strand'];
$section = $_POST['section'];
$gender = $_POST['gender'];
	

	$user_editedvalues = array (
			"studid" => $studid,
			"fname" => $fname, 
			"lname" => $lname, 
			"strand" => $strand,
			"section" => $section,
			"gender" => $gender
	);

	update($user_editedvalues, $id, $table_name);
	header("Location: student_manage.php");
	$text = "User has successfully updated a student.";
		save_logs($text);
?>