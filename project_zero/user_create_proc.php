<?php

include "perfect_function.php";

$table_name = "users";

$username = $_POST['username'];

$password = $_POST['password'];
$hashed_password = _hash_string($password);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$acct_type = $_POST['acct_type'];
$status = $_POST['status'];
if ($status!=1) {
	$status = 0;
}
$user_data = array(
	//columname from table => value from post
			"username" => $username, 
			"password" => $hashed_password, 
			"firstname" => $firstname,
			"lastname" => $lastname, 
			"acct_type" => $acct_type,
			"status" => $status
);

insert($user_data, $table_name);
header("Location: user_manage.php");
$text = "User has successfully added a user.";
		save_logs($text);
?>