<?php
include "perfect_function.php";

$submit = $_POST['submit'];
if ($submit=='cancel') {
	header("Location: user_manage.php");
}

$table_name = "users";

//get user ID from URL
$id = $_GET['id'];

delete($id, $table_name);

header("Location: user_manage.php");
$whoami = _get_username_from_id($_SESSION['id']);

$text = "$whoami has successfully deleted a user.";
		save_logs($text);

?>