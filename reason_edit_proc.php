<?php
	include "perfect_function.php";

	$table_name = 'reasons';

	//get user ID from URL
	$id = $_GET['id'];

	
	$reasons = $_POST['reasons'];
	
	

	$user_editedvalues = array (
			"reasons" => $reasons,
			
			
	);

	update($user_editedvalues, $id, $table_name);
	header("Location: reason_manage.php");
	$whoami = _get_username_by_id($_SESSION['id']);
	$text = "$whoami has successfully updated a user.";
		save_logs($text);
?>