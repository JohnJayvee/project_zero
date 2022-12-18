<?php include "admin_header.php"; ?>

<h1 class="page-header">Edit Student</h1>

<!-- main content -->
<?php
	//get user ID from URL
	$studid = $_GET['studid'];

	
	$table_name = "students";

	//select user record where ID (column from table) = user ID from URL 
	$userdata = get_where($table_name, $id);

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
<div class="box-content">

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span><?=$fname." ".$lname?></h2>
			</div>
			<div class="box-content">

				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
						<div class="control-group">
							<label class="control-label">First Name:</label>
							<div class="controls">
								<input type="text" class="span4" name="username" value="<?= $fname ?>" required>
							</div>
						</div>

						

						<div class="control-group">
							<label class="control-label">Middle Name:</label>
							<div class="controls">
								<input type="text" class="span4" name="firstname" value="<?= $mname ?>" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Last Name:</label>
							<div class="controls">
								<input type="text" class="span4" name="lastname" value="<?= $lname ?>" required>
							</div>
						</div>
						<?php 
						}
						?>
						<div class="control-group">
							<label class="control-label">Year Level:</label>
							<div class="controls">
							<select name="year_level" required style="width: 40%;" autocomplete="off"><option value="">SELECT YEAR LEVEL</option>
								<option value="Grade 11">Grade 11</option>
								<option value="Grade 12">Grade 12</option>
							</select>
							</div>
						</div>
						 <div class="control-group">
							<label class="control-label">Section:</label>
							<div class="controls">
								<input type="text" class="form-control" name="section" required style="width: 40%;" autocomplete="off">
							</div>
						

						<div class="control-group">
							<label class="control-label" >Strand:</label>
							<div class="controls">
								<input type="text" class="form-control" name="strand" required style="width: 40%;" autocomplete="off">
							</div>
						</div>

						
						</div>
						<div class="control-group">
							<label class="control-label" >SCHOOL YEAR:</label>
							<div class="controls">
								<input type="text" class="form-control" name="section" required style="width: 40%;" autocomplete="off">
							</div>

						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Update changes</button>
							<a class="btn" href="user_manage.php">Cancel</a>
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