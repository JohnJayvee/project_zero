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

<body>
	<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#"><span>CHECKED</span></a>

				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i>
								<?= _get_firstname_from_id($_SESSION['id']) ?>
									<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
									<span>Account Settings</span>
								</li>

								<li><a href="<?= base_url() ?>logout.php"><i class="halflings-icon off"></i> Logout</a>
								</li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

			</div>
		</div>
	</div>
	<!-- start: Header -->

	<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?= base_url() ?>dashboard.php"><i class="icon-bar-chart"></i><span
									class="hidden-tablet"> REPORTS</span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#exampleModal"><span class="hidden-tablet">Do
									Attendance</span></a></li>
						<li><a href="<?= base_url() ?>attendance.php"><span class="hidden-tablet">Admission</span></a>
						</li>
						<?php
                        $acct_type = _get_accttype_from_id($_SESSION['id']);
                        if ($acct_type == 1) {
                        ?>
						<li><a href="<?= base_url() ?>student_manage.php"><span class="hidden-tablet">
									Students</span></a></li>
						<li><a href="<?= base_url() ?>strand_manage.php"><span class="hidden-tablet">Senior High
									School</span></a></li>
						<li><a href="<?= base_url() ?>user_manage.php"><span class="hidden-tablet"> Users</span></a>
						</li>

						<?php
                        }
                        ?>

						<li><a href="<?= base_url() ?>shs_report.php""><span class=" hidden-tablet"> Senior High School
								Report</span></a></li>




					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
						enabled to use this site.</p>
				</div>
			</noscript>
			<?php include 'attendance_modal.php'; ?>
			<!-- start: Content -->
			<div id="content" class="span10">