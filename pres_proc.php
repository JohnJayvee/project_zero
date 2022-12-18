<?php 
include "perfect_date.php";
include "perfect_function.php"; 


	$table_name = 'students';

	//get user ID from URL
	$id = $_POST['student'];
	$get_pres = get_where($table_name, $id);

	foreach ($get_pres as $key => $row) {
		$no_pres = $row['no_pres'];
	$no_pres = $no_pres = $no_pres + 1;
}

	$user_editedvalues = array (
			"no_pres" => $no_pres
	);


	update($user_editedvalues, $id, $table_name);
	header("Location: vote_success.php");
?>