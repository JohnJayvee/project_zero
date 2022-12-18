<?php
include "perfect_function.php";
session_start();

$table_name = "users";
$username = $_POST['username'];
$password = $_POST['password'];

$pword_table = _get_pword_from_username($username, $table_name);
$user_id = _get_id_from_username($username);
$status = _get_status_from_id($user_id);

if($status==0) {
	$_SESSION['error_msg'] = "Your account is inactive.";
	header("Location: login.php");
} elseif (isset($pword_table)) {
	$result = _verify_hash($password, $pword_table);
	if ($result==true) {
		$_SESSION['id'] = $user_id;
		header("Location: dashboard.php");
		$text = "User $username has successfully logged in.";
		save_logs($text);

	}
	else {
		$_SESSION['error_msg'] = "Password is incorrect. Please try again.";
		header("Location: login.php");
	}
} else {
	$_SESSION['error_msg'] = "Username invalid. Please try again.";
	header("Location: login.php");
}
?>