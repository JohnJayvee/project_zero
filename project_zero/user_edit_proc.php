<?php
	include "perfect_function.php";

	$table_name = 'users';

	//get user ID from URL
	$id = $_GET['id'];

	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$acct_type = $_POST['acct_type'];
	$status = $_POST['status'];
	if ($status!=1) {
		$status = 0;
	}

	$user_editedvalues = array (
			"username" => $username, 
			"firstname" => $firstname,
			"lastname" => $lastname, 
			"acct_type" => $acct_type,
			"status" => $status
	);

	update($user_editedvalues, $id, $table_name);
	header("Location: user_manage.php");
	$text = "$whoami has successfully updated a user.";
		save_logs($text);
?>