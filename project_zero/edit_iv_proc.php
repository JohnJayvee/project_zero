<?php
session_start();
	include "perfect_function.php";

	$table_name = 'iv_sheet';

	//get user ID from URL
	$id = $_GET['id'];

	$bottleno = $_POST['bottleno'];
$ivvolume = $_POST['ivvolume'];
$drugincorporated = $_POST['drugincorporated'];
$ivsite = $_POST['ivsite'];
$typeofcannula = $_POST['typeofcannula'];
$rateofflow = $_POST['rateofflow'];
$datetimestart = $_POST['datetimestart'];
$nurse1 = $_POST['nurse1'];
$datetimedisc = $_POST['datetimedisc'];
$nurse2 = $_POST['nurse2'];

	$user_editedvalues = array (
			"bottleno" => $bottleno, 
			"ivvolume" => $ivvolume,
			"drugincorporated" => $drugincorporated, 
			"ivsite" => $ivsite,
			"typeofcannula" => $typeofcannula,
			"rateofflow" => $rateofflow,
			"datetimestart" => $datetimestart,
			"nurse1" => $nurse1,
			"datetimedisc" => $datetimedisc,
			"nurse2" => $nurse2,
			"patientid" => $_SESSION['patient_id']
	);

	update($user_editedvalues, $id, $table_name);
	header("Location: iv_chart.php");
?>