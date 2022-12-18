<?php include "perfect_function.php";
session_start();
$id = $_SESSION['id'];
?>
<?php include "_make_sure_logged_in.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>CHECKED</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="icon" href="checkedico.png">
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword"
		content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?= base_url() ?>adminfiles/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>adminfiles/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?= base_url() ?>adminfiles/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?= base_url() ?>adminfiles/css/style-responsive.css" rel="stylesheet">
	<link
		href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext'
		rel='stylesheet' type='text/css'>
	<!-- end: CSS -->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>adminfiles/img/favicon.ico">
	<!-- end: Favicon -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




</head>