<?php include 'admin_header.php' ?>

<body>
	<?php
$table_name = "students";
$id = $_SESSION['stud_id'];
?>
	<ul class="nav nav-tabs">
		<li><a href="student_profile.php?id=<?= $id ?>"><span class="hidden-tablet">Profile</span></a></li>
		<li class="active"><a href="student_profile_attendance.php?id=<?= $id ?>"><span
					class="hidden-tablet">Attendance</span></a></li>

	</ul>
	<ul class="nav nav-tabs">
		<li><a href="student_profile_attendance.php?id=<?= $id ?>"><span class="hidden-tablet">All</span></a></li>
		<li><a href="student_profile_present.php?id=<?= $id ?>"><span class="hidden-tablet">Present</span></a></li>
		<li class="active"><a href="student_profile_late.php?id=<?= $id ?>"><span class="hidden-tablet">Late</span></a>
		</li>
		<li><a href="student_profile_absent.php?id=<?= $id ?>"><span class="hidden-tablet">Absent</span></a></li>
	</ul>
	<!-- main content -->


	<div class="box-content">

		<table class="table table-striped table-bordered bootstrap-datatable datatable">
			<thead>
				<tr>

					<th>Date</th>
					<th>Attendance</th>
					<th>Reason</th>
					<th>Excuse</th>
					<th>Day</th>

				</tr>
			</thead>

			<?php
//get user ID from URL


$id = $_SESSION['stud_id'];

$table_name = "attendance_records";

//select user record where ID (column from table) = user ID from URL
$userdata = get_late_try($table_name, $id);


//fetch result and pass it  to an array

foreach ($userdata as $key => $row) {
	$datetoday = $row['datetoday'];
	$attendance_status = $row['attendance_status'];
	$reason = $row['reason'];
	$excuse = $row['excuse'];
	$attendance_day = $row['attendance_day'];





?>
			<tr>
				<td>
					<?= $datetoday ?>
				</td>
				<td class="center">
					<?php
	if ($attendance_status == 1) {
                            ?>
					<span class="label label-info">PRESENT</span>
					<?php
	} elseif ($attendance_status == 2) {
                            ?>
					<span class="label label-warning">LATE</span>
					<?php
	} elseif ($attendance_status == 3) {
                            ?>
					<span class="label label-danger">ABSENT</span>
					<?php
	}
                            ?>
				</td>
				<td>
					<?= $reason ?>
				</td>
				<td class="center">
					<?php
	if ($excuse == 5) {
                            ?>
					<span class="label label-info">Excused</span>
					<?php
	} elseif ($excuse == 4) {
                            ?>
					<span class="label label-warning">Not Excused</span>
					<?php
	}
                            ?>
				</td>
				<td class="center">
					<?php
	if ($attendance_day == 5) {
                            ?>
					<span class="label label-info">Whole Day</span>
					<?php
	} elseif ($attendance_day == 4) {
                            ?>
					<span class="label label-warning">Half Day</span>
					<?php
	}
                            ?>
				</td>

			</tr>
			<?php
}
?>

		</table>
	</div>

</body>



</body>

<?php include 'admin_footer.php' ?>