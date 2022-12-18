<?php
include "perfect_function.php";

$table_name = "sliderpics";

//get user ID from URL
$id = $_GET['id'];

$filename_picture = _get_sliderpic_from_id($table_name, $id);

unlink("slider_pics/".$filename_picture);

delete($id, $table_name);

header("Location: sliderpics_manage.php");
$text = "User $username has successfully deleted a photo slider.";
		save_logs($text);

?>