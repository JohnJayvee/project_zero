<?php include "admin_header.php"; ?>

<h1 class="page-header"><b>Delete Student</b></h1>

<!-- main content -->

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><b>Confirm Delete</b></h2>
		</div>
		<div class="box-content">
			<p>
				Are you sure you want to delete the Student?
			</p>

			<?php
            //get user ID from URL
            $id = $_GET['id'];
            $form_location = base_url() . "student_delete_proc.php?id=" . $id;
            ?>
			<form class="form-horizontal" method="post" action="<?= $form_location ?>">
				<fieldset>
					<div class="control-group" style="height:200px;">
						<button type="submit" name="submit" value="Yes - Delete Blog Entry" class="btn btn-success">Yes
							- Delete Student</button>
						<button type="submit" name="submit" value="Cancel" class="btn btn-warning">Cancel</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->
</div><!--/row-->