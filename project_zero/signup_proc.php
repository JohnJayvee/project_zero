<?php

include "perfect_function.php";

$table_name = "users";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = _hash_string($password);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$user_data = array(
			"username" => $username, 
			"password" => $hashed_password, 
			"firstname" => $firstname,
			"lastname" => $lastname, 
			"acct_type" => 2,
			"status" => 0
);

//add record to users table
insert($user_data, $table_name);

//generate token from Perfect Function
$token = generate_random_string(25);

//add record to the tokens table
$token_data = array(
	//get_max -> gets the recently added (ID) record
	"user_id" => get_max($table_name),
	"token" => $token
);

insert($token_data, "tokens");

//send an email
$target_email = $email;
$subject = 'ACCOUNT CONFIRMATION';
$msg = 'This is a test message.  If you can read this then everything works.<br>';
$msg.= 'Click the link to verify your account:<br><br>';

//creates a confirmation link
$msg.= base_url().'confirm.php?token='.$token;

$headers = "From: cbabaranjr@gmail.com\r\n";
$headers .= "Content-type: text/html; charset=\"UTF-8\"; format=flowed \r\n";

//_fire_email from the perfect function
_fire_email($target_email, $subject, $msg);

header("Location: signup_msg.php");
?>