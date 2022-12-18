
<?php
session_start();
include "perfect_function.php";

$table_name = "school_yr";

$year = $_POST['year'];


$strand_data = array(
	//columname from table => value from post
			"year" => $year
			 

			
);
insert($strand_data, $table_name);
header("Location: school_yr_manage.php");
$whoami = _get_username_from_id($_SESSION['id']);

$text = "$whoami has successfully added a school year.";
		save_logs($text);
?>