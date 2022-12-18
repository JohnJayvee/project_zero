<?php
	include "perfect_function.php";

	$table_name = 'strand';

	//get user ID from URL
	$id = $_GET['id'];

	
	$strand = $_POST['strand'];
	$strand_initials = $_POST['strand_initials'];
	

	$user_editedvalues = array (
			"strand" => $strand, 
			"strand_initials" => $strand_initials
			
	);

	update($user_editedvalues, $id, $table_name);
	header("Location: strand_manage.php");
	$text = "$whoami has successfully updated a user.";
		save_logs($text);
?>