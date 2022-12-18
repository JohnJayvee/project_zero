<?php include 'admin_header.php' ?>

<body>
	<?php
$table_name = "students";
$id = $_SESSION['stud_id'];
$section_id = $_SESSION['section_id'];
?>
	<ul class="nav nav-tabs">
		<li class="active"><a href="student_profile.php?=<?= $id ?>"><span class="hidden-tablet">Profile</span></a></li>
		<li><a href="student_profile_attendance.php?=<?= $id ?>"><span class="hidden-tablet">Attendance</span></a></li>

	</ul>
	<h1 class="page-header">Students</h1>
	<!-- main content -->

	<?php
//get user ID from URL
$studid = $_GET['studid'];


$table_name = "students";

//select user record where ID (column from table) = user ID from URL 
$userdata = get_where_id($table_name, $id);

//fetch result and pass it  to an array
foreach ($userdata as $key => $row) {
	$studid = $row['studid'];
	$section_id = $row['section_id'];
	$fname = $row['fname'];
	$lname = $row['lname'];
	$mname = $row['mname'];
	$gender = $row['gender'];


?>


	<h1>
		<div class="well text-center">
			<h2><label>NAME:&nbsp;<?= $lname ?>, <?= $fname ?>
							<?= $mname ?> </label>
				<label>Gender:&nbsp;<?= $gender ?></label>
				<?php

    ?>
				<?php
	$table_name = "section";


	$get_section = get_join_strand($table_name, 'strand', 'strand_id', $section_id);

	foreach ($get_section as $key => $row) {
		$section = $row['section_name'];
		$year_level = $row['year_level'];
		$strand = $row['strand'];
		$school_yr = $row['year'];

    ?>
				<label>Year and Section:&nbsp;<?= $year_level . " " . $section ?></label>
				<label>Strand:&nbsp;<?= $strand ?></label>
				<label>School Year:&nbsp;<?= $school_yr ?></label>
				<?php
	}

	$absent = count_attendance(3, $studid);
	$late = count_attendance(2, $studid);
    ?>
				<label>Number of Absences:&nbsp;<?= $absent ?></label>
				<label>Number of Late:&nbsp;<?= $late ?></label>
				<?php } ?>
			</h2>
		</div>
	</h1>



</body>

<?php include 'admin_footer.php' ?>