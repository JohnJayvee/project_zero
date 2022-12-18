<?php 
include "perfect_date.php";
include "perfect_function.php"; 
$table_name = "students";
foreach ($_POST['attendance_status'] as $key => $attendance_status) {
	
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$strand = $_POST['strand'];
$attendance_status = $_POST['attendance_status'];
$section = $_POST['section'];

}
//$date = $birthdate;
//$date = strtotime($birthdate);
//$date = date('m-d-Y', $date);

//date_time = make_timestamp_from_datepicker_us($date);


$user_data = array(
	//columname from table => value from post
	
			"fname" => $fname, 
			"lname" => $lname, 
			"strand" => $strand,
			"section" => $section,
			"attendance_status" => $attendance_status
			
);

insert($user_data, $table_name);

?>





