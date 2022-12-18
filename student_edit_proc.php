<?php
	include "perfect_function.php";

	$table_name = 'students';

	//get user ID from URL
	$id = $_GET['id'];

	
$section_id = $_POST['section_id'];

	

	$user_editedvalues = array (
			
			"section_id" => $section_id
			
	);

update($user_editedvalues, $id, $table_name);
$whoami = _get_username_from_id($_SESSION['user_id']);
	
	header("Location: student_manage.php");
	$text = "$whoami has successfully updated a student.";
		save_logs($text);
?>