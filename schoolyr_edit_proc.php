<?php
include "perfect_function.php";

$table_name = 'school_yr';

//get user ID from URL
$id = $_GET['id'];


$year = $_POST['year'];


$user_editedvalues = array(
	"year" => $year

);

update($user_editedvalues, $id, $table_name);
header("Location: school_yr_manage.php");
$whoami = _get_username_by_id($_SESSION['id']);
$text = "$whoami has successfully updated a School Year.";
save_logs($text);
?>