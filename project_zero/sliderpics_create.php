<?php include "admin_header.php"; 
session_start(); ?>

<h1 class="page-header">Add Slider Picture</h1>

<!-- main content -->

<div class="box-content">

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Slider Pictures</h2>
			</div>

			<div class="box-content">
				<?php
				if (isset($_SESSION['pic_errormsg'])) {
				?>
				<div class="alert alert-warning">
					<?= $_SESSION['pic_errormsg'] ?>
				</div>
				<?php
				}
				unset($_SESSION['pic_errormsg']);
				?>

				<?php $form_location = base_url()."sliderpics_create_proc.php"; ?>
				<form class="form-horizontal" method="post" action="<?= $form_location ?>" enctype="multipart/form-data">
					<p style="margin-top:24px;">
						Please choose a file from your computer and then press 'Save Changes'.
					</p>
					<fieldset>
						<div class="control-group" style="height:200px;">
							<label class="control-label" for="fileInput">File input</label>
							<div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="fileToUpload" type="file" required>
							</div>
						</div>

						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Save changes</button>
							<a class="btn" href="sliderpics_manage.php">Cancel</a>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- close main content -->

<?php include "admin_footer.php"; ?>