<?php include 'admin_header.php'; 
session_start()?>
<body>

<h1 class="page-header">Students</h1>
<!-- main content -->

<?php
		$id = $_GET['id'];
	

	$form_location = base_url()."student_profile_edit_proc.php?id=".$id; 
	$table_name = "students";

	//select user record where ID (column from table) = user ID from URL 
	$get_userData = get_where($table_name, $id);

	//fetch result and pass it  to an array
	foreach ($get_userData as $key => $row) {
		$id =  $row['id'];
		$fname =  $row['fname'];
		$lname = $row['lname'];
		$mname = $row['mname'];
		$gender = $row['gender'];

		
	
	?>
<div class="box-content">

	
			<div class="box-content">

				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
						<div class="control-group">
							<label class="control-label">First Name:</label>
							<div class="controls">
								<input type="text" class="span4" name="fname" value="<?= $fname ?>" required>
							</div>
						</div>

						

						<div class="control-group">
							<label class="control-label">Middle Name:</label>
							<div class="controls">
								<input type="text" class="span4" name="lname" value="<?= $mname ?>" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Last Name:</label>
							<div class="controls">
								<input type="text" class="span4" name="lname" value="<?= $lname ?>" required>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label">Gender</label>
						<div class="controls">
						<select class="span4" name="gender" required>
									<?php
									if ($gender=='Male') {
									?>
										<option >Male</option>
										<option >Female</option>
										
									<?php
									} else{
									?>
										<option>Female</option>
										<option>Male</option>
										
									<?php
									} 
								}
										?>
										

								</select>
							
						</div>
							
						</label>
						
						

						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Update changes</button>
							<a class="btn" href="student_manage.php">Cancel</a>
						</div>
						
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	<?php include 'admin_footer.php' ?>

</div>