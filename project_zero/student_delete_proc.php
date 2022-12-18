<?php
include "perfect_function.php";
session_start();

$submit = $_POST['submit'];
if ($submit=='Cancel') {
	header("Location: student_manage.php");
}else {
	


$table_name = "students";

//get user ID from URL
$id = $_GET['id'];

delete($id, $table_name);

header("Location: student_manage.php");
}
?>