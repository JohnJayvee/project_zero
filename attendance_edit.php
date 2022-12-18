<?php include "admin_header.php"; ?>

<h1 class="page-header">Edit Attendance</h1>

<!-- main content -->
<?php
	//get user ID from URL
	$id = $_GET['id'];

	$form_location = base_url()."attendance_edit_proc.php?id=".$id; 
	$table_name = "attendance_records";

	//select user record where ID (column from table) = user ID from URL 
	$get_userData = get_where($table_name, $id);

	//fetch result and pass it  to an array
	foreach ($get_userData as $key => $row) {
		$id =  $row['id'];
		$studid=  $row['studid'];
		$attendance_status = $row['attendance_status'];
	}
	?>

		

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Student</h2>
			</div>
			<div class="box-content">

				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
						<div class="control-group">
							<label class="control-label">STUDENT ID:</label>
							<div class="controls">
								<label><?= $studid ?></label>
							</div>
						</div>


						<div class="control-group">
							<label class="control-label">Attendance:</label>
							<div class="controls">
								<select class="span4" name="attendance_status" required>
									<?php
									if ($attendance_status==1) {
									?>
										<option value="1">Present</option>
										<option value="2">Late</option>
										<option value="3">Absent</option>
									<?php
									} elseif($attendance_status==2) {
									?>
										<option value="2">Late</option>
										<option value="1">Present</option>
										<option value="3">Absent</option>
									<?php
									} elseif ($attendance_status==3) {
										?>
										<option value="3">Absent</option>
										<option value="2">late</option>
										<option value="1">Present</option>
										<?php
									}
								
									 else {
										?>
										<option value="">-----</option>
										<option value="3">Absent</option>
										<option value="2">late</option>
										<option value="1">Present</option>
										<?php
									}
									?>
								</select>
							</div>
						</div>


						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Update changes</button>
							<a class="btn" href="view_present.php">Cancel</a>
						</div>
						
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- close main content -->

<?php include "admin_footer.php"; ?>