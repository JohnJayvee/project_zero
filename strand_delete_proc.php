<?php
include "perfect_function.php";

$submit = $_POST['submit'];
if ($submit=='cancel') {
	header("Location: strand_manage.php");
}

$table_name = "strand";

//get user ID from URL
$id = $_GET['id'];

delete($id, $table_name);

header("Location: strand_manage.php");
$text = "User has successfully deleted a strand.";
		save_logs($text);

?>