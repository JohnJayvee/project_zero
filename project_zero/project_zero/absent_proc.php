<?php 
include "perfect_date.php";
include "perfect_function.php"; 


	$table_name = 'students';

	foreach ($_POST['attendance_status'] as $key => $value) {
		$id = $value;
	

	//get user ID from URL
	$get_attendance = get_where($table_name, $id);

	foreach ($get_attendance as $key => $row) {
		$num_absent = $row['no_abs'];
	$add_absent = $num_absent + "1";
	}

	$user_editedvalues = array (
			"no_abs" => $add_absent
	);


	update($user_editedvalues, $id, $table_name);
}
	//header("Location: vote_success.php");
?>	