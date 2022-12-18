<?php
include "perfect_function.php";

$table_name = 'section';

//get user ID from URL
$id = $_GET['id'];


$section_name = $_POST['section_name'];


$user_editedvalues = array(
	"section_name" => $section_name

);

update($user_editedvalues, $id, $table_name);
header("Location: section_manage.php");
$whoami = _get_username_by_id($_SESSION['id']);
$text = "$whoami has successfully updated a Section.";
save_logs($text);
?>