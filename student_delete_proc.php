<?php
include "perfect_function.php";
session_start();

$submit = $_POST['submit'];
if ($submit == 'Cancel') {
	header("Location: student_manage.php");
} else {



	$table_name = "students";

	//get user ID from URL
	$id = $_GET['id'];

	delete($id, $table_name);
	$whoami = _get_username_from_id($_SESSION['id']);
	header("Location: student_manage.php");
	$text = "$whoami has successfully added a Student.";
	save_logs($text);
}
?>