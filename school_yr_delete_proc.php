<?php
include "perfect_function.php";

$submit = $_POST['submit'];
if ($submit=='cancel') {
	header("Location: reason_manage.php");
}

$table_name = "school_yr";

//get user ID from URL
$id = $_GET['id'];

delete($id, $table_name);

header("Location: school_yr_manage.php");
$whoami = _get_username_by_id($_SESSION['id']);
$text = "$whoami has successfully deleted a reason.";
		save_logs($text);

?>