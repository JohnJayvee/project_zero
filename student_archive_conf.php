<?php include "admin_header.php"; ?>

<h1 class="page-header">Alumni Student</h1>

<!-- main content -->


		<div class="box-content">
			<p>
				Are you sure you want to move this student to Alumni?
			</p>

			<?php
				//get user ID from URL

				$id = $_GET['id']; 
				$form_location = base_url()."student_archive_proc.php?id=".$id;  
			?>
			<form class="form-horizontal" method="post" action="<?= $form_location ?>">
			  <fieldset>
				<div class="control-group" style="height:200px;">
				<input type="hidden" name="status" value="1">
					<button type="submit" name="submit" value="Yes - Alumni Blog Entry" class="btn btn-danger">Yes - Alumni Student</button>
					<button type="submit" name="submit" value="Cancel" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form> 
	</div>

<!-- close main content -->
<?php include "admin_footer.php"; ?>