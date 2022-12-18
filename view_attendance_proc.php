<?php include "perfect_function.php";

$sectionname=$_POST['newsection'];
$section_data=get_section_from_id("section",$sectionname);
foreach($section_data as $key=> $row){
	$section_id = $row['section_id'];
	$section_name = $row['section_name'];
}

session_start();
$_SESSION["sname"] = $section_id;
$_SESSION["sectionname"] = $section_name;

header("Location: view_attendance.php");


?>