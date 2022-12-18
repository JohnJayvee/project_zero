<?php include "admin_header.php"; ?>

<h1 class="page-header">Edit School Year</h1>

<!-- main content -->
<?php
	//get user ID from URL
	$id = $_GET['id'];
	

	$form_location = base_url()."schoolyr_edit_proc.php?id=".$id; 
	$table_name = "school_yr";

	//select user record where ID (column from table) = user ID from URL 
	$get_userData = get_where($table_name, $id);

	//fetch result and pass it  to an array
	foreach ($get_userData as $key => $row) {
		$id =  $row['id'];
		
		$year = $row['year'];
		
	
	?>


	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Year</h2>
			</div>
			<div class="box-content">

				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
						<div class="control-group">
							<label class="control-label">Year:</label>
							<div class="controls">
								<input type="text" class="span4" name="year" value="<?= $year ?>" required>
							</div>
						</div>

						<!-- password (should be hidden) -->

					
<?php } ?>

						

						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Update changes</button>
							<a class="btn" href="reason_manage.php">Cancel</a>
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