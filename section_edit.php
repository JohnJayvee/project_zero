<?php include "admin_header.php"; ?>

<h1 class="page-header">Edit Section</h1>

<!-- main content -->
<?php
//get user ID from URL
$table_name = "section";
$id = $_GET['id'];


$form_location = base_url() . "section_edit_proc.php?id=" . $id;


//select user record where ID (column from table) = user ID from URL 
$get_userData = get_where($table_name, $id);

//fetch result and pass it  to an array
foreach ($get_userData as $key => $row) {
	$id = $row['id'];

	$section_name = $row['section_name'];


?>


<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white file"></i><span class="break"></span>Section</h2>
		</div>
		<div class="box-content">

			<form class="form-horizontal" method="post" action="<?= $form_location ?>">
				<fieldset>
					<div class="control-group">
						<label class="control-label">Section:</label>
						<div class="controls">
							<input type="text" class="span4" name="section_name" value="<?= $section_name ?>" required>
						</div>
					</div>

					<!-- password (should be hidden) -->


					<?php } ?>



					<div class="form-actions">
						<button type="submit" class="btn btn-primary" name="submit" value="Submit">Update
							changes</button>
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