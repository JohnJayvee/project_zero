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
		<li class="active"><a href="student_profile_attendance.php?id=<?= $id ?>"><span
					class="hidden-tablet">All</span></a></li>
		<li><a href="student_profile_present.php?id=<?= $id ?>"><span class="hidden-tablet">Present</span></a></li>
		<li><a href="student_profile_late.php?id=<?= $id ?>"><span class="hidden-tablet">Late</span></a></li>
		<li><a href="student_profile_absent.php?id=<?= $id ?>"><span class="hidden-tablet">Absent</span></a></li>
	</ul>
	<!-- main content -->

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2>Students</h2>
			</div>

			<div class="box-content">
				<div id="attendance_records">
					<table class="table table-striped table-bordered bootstrap-datatable datatable">
						<thead>
							<tr>

								<th>Date</th>
								<th>Attendance</th>


							</tr>
						</thead>

						<?php
//get user ID from URL


$id = $_SESSION['stud_id'];

$table_name = "attendance_records";

//select user record where ID (column from table) = user ID from URL
$userdata = get_all_try($table_name, $id);

$edit_attendance_url = base_url() . 'attendance_edit.php?id=' . $id;
//fetch result and pass it  to an array

foreach ($userdata as $key => $row) {

	$datetoday = $row['datetoday'];
	$attendance_status = $row['attendance_status'];
	$reason = $row['reason'];
	$excuse = $row['excuse'];






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

						</tr>
						<?php
}
?>

					</table>
				</div>
			</div>
		</div>
	</div>

</body>

<script>
	$(document).ready(function () {
		$.datepicker.setDefaults({
			dateFormat: 'yy-mm-dd'
		});
		$(function () {
			$("#from_date").datepicker();
			$("#to_date").datepicker();
		});
		$('#filter').click(function () {
			var from_date = $('#from_date').val();
			var to_date = $('#to_date').val();
			if (from_date != '' && to_date != '') {
				$.ajax({
					url: "filter.php",
					method: "POST",
					data: { from_date: from_date, to_date: to_date },
					success: function (data) {
						$('#order_table').html(data);
					}
				});
			}
			else {
				alert("Please Select Date");
			}
		});
	});  
</script>

</body>

<?php include 'admin_footer.php' ?>