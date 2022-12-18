<?php include 'admin_header.php' ?>
<body>
<?php 
$table_name = "students";
$id = $_SESSION['stud_id'];
?>
<ul class="nav nav-tabs">
<li class="active"><a href="student_profile.php?=<?= $_SESSION['studid'] ?>"><span class="hidden-tablet">Profile</span></a></li>
<li><a href="student_profile_present.php?=<?= $_SESSION['studid'] ?>"><span class="hidden-tablet">Present</span></a></li>
<li><a href="student_profile_late.php?=<?= $_SESSION['studid'] ?>"><span class="hidden-tablet">Late</span></a></li>
						
						<li><a href="student_late.php?=<?= $_SESSION['studid'] ?>"><span class="hidden-tablet">Absent</span></a></li>
						</ul>
<!-- main content -->
<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2>Students</h2>
			</div>
    
			<div class="box-content">
		
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <thead>
					  <tr>
					  	  <th>Student ID</th>
						  <th>Date</th>
						  <th>Attendance</th>
					  </tr>
				  </thead>

<?php
	//get user ID from URL
	$studid = $_GET['studid'];

	
	$table_name = "students";

	//select user record where ID (column from table) = user ID from URL 
	$userdata = get_where_custom_id($table_name, $id);

	//fetch result and pass it  to an array
	foreach ($userdata as $key => $row) {
		$studid = $row['studid'];
		$fname =  $row['fname'];
		$lname =  $row['lname'];
		$mname = $row['mname'];
		$gender = $row['gender'];
		$strand = $row['strand'];
		$year_level = $row['year_level'];
		$section = $row['section'];
		$school_yr = ['school_yr'];
	
	?>






</body>

<?php include 'admin_footer.php' ?>