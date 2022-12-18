<?php

include "perfect_function.php"; 
include "perfect_date.php";

$table_name = "students";

$id = $_POST['id'];
$studid = $_POST['studid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];
$gender = $_POST['gender'];
$section_id = $_POST['section_id'];


$user_data = array(
	//columname from table => value from post
	"id" => $id,
	"studid" => $studid,
			"fname" => $fname, 
			"lname" => $lname, 
			"mname" => $mname,
			
			"gender" => $gender,
			
			"section_id" => $section_id,
			
			
);

insert($user_data, $table_name);

header("Location: student_manage.php");
$text = "User has successfully added a Student.";
		save_logs($text);
?>