<?php
session_start();
include "perfect_function.php";

$table_name = "section";

$section_id = $_POST['section_id'];
$strand_id = $_POST['strand_id'];
$year_level = $_POST['year_level'];
$year = $_POST['year'];
$section_name = $_POST['section_name'];

$data = array(
	//columname from table => value from post

	"section_id" => $section_id,
	"strand_id" => $strand_id,
	"year_level" => $year_level,
	"year" => $year,
	"section_name" => $section_name


);
$data = insert($data, $table_name);

header("Location: section_manage.php");
$whoami = _get_username_from_id($_SESSION['id']);
$text = "$whoami has successfully added a Section.";
save_logs($text);
?>