<?php include "admin_header.php";

?>
<h1 class="page-header">Students</h1>
<!-- main content -->
<?php $create_attendance = base_url() . "attendance_proc.php"; ?>
<a href="<?= $create_attendance ?>">
	<button class="btn btn-success">Check Attendance</button></a>


<ul class="nav nav-tabs">
	<li><a href="<?= base_url() ?>view_attendance.php"><span class="hidden-tablet">All</span></a></li>
	<li><a href="<?= base_url() ?>view_present.php"><span class="hidden-tablet">Present</span></a></li>
	<li><a href="<?= base_url() ?>view_late.php"><span class="hidden-tablet">Late</span></a></li>
	<li class="active"><a href="<?= base_url() ?>view_absent.php"><span class="hidden-tablet">absent</span></a></li>
</ul>






<div class="box-content">
	<ul class="nav nav-tabs">
		<li><a href="<?= base_url() ?>view_absent.php"><span class="hidden-tablet">Today</span></a></li>
		<li class="active"><a href="<?= base_url() ?>view_all_absent.php"><span class="hidden-tablet">All
					time</span></a></li>

	</ul>






	<table class="table table-striped table-bordered bootstrap-datatable datatable">
		<form method="Post" action="attendance.php">
			<thead>
				<tr>
					<th></th>

					<th>Student Name</th>
					<th>date</th>
					<th>Attendance</th>
					<th>Actions</th>



				</tr>
			</thead>
			<?php
                session_start();
                $user_data = get_join_all_attendance('students', 'attendance_records', 'studid', 3, $_SESSION["sname"]);
                //get all records from users table
                

                //fetch result set and pass it to an array (associative)
                $serial_number = "0";

                foreach ($user_data as $key => $row) {
	                $serial_number++;
	                $id = $row['id'];
	                $studid = $row['studid'];
	                $fname = $row['fname'];
	                $lname = $row['lname'];
	                $strand = $row['strand'];
	                $section = $row['section'];
	                $year_level = $row['year_level'];
	                $datetoday = date("m-d-Y", strtotime($row['datetoday']));

	                $attendance_status = $row['attendance_status'];
	                $edit_attendance_url = base_url() . 'attendance_edit_absent.php?id=' . $id;


                ?>

			<tbody>
				<td class="center">
					<?= $serial_number ?>
				</td>
				<td class="center">
					<?= $fname . " " . $lname ?>
				</td>
				<td class="center">
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
				<td><a class="btn btn-info" href="<?= $edit_attendance_url ?>">
						edit
					</a></td>
				</tr>
				<?php } ?>
			</tbody>
	</table>


	</form>
	<!-- close main content -->

	<?php include "admin_footer.php"; ?>