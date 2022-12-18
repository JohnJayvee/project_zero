<?php
include "perfect_function.php";

$table_name = 'students';

//get user ID from URL
$id = $_GET['id'];

$studid = $_POST['studid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$strand = $_POST['strand'];
$section = $_POST['section'];
$gender = $_POST['gender'];
$no_pres = $_POST['no_pres'];
$no_abs = $_POST['no_abs'];
$no_late = $_POST['no_late'];


$user_editedvalues = array(
	"studid" => $studid,
	"fname" => $fname,
	"lname" => $lname,
	"strand" => $strand,
	"section" => $section,
	"gender" => $gender,
	"no_pres" => $no_pres,
	"no_abs" => $no_abs,
	"no_late" => $no_late
);

update($user_editedvalues, $id, $table_name);
header("Location: user_manage.php");
$text = "User has successfully updated a student.";
save_logs($text);
?>