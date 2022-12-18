<?php include 'admin_header.php';
$acct_type = _get_accttype_from_id($_SESSION['id']);
if ($acct_type=="2"){
	header("Location: no_access.php");
}
?>
<h1 class="page-header"><b>Senior High School</b></h1>
<ul class="nav nav-tabs">
						

					<li   ><a href="<?= base_url() ?>section_manage.php"><span class="hidden-tablet">Section</span></a></li>
						<li><a href="<?= base_url() ?>strand_manage.php"><span class="hidden-tablet">Strand</span></a></li>
						<li class="active"><a href="<?= base_url() ?>school_yr_manage.php"><span class="hidden-tablet">School Year</span></a></li>
						
						
					</ul>
					<div class="box-content">

	
			

			<div class="box-content">
				<?php $form_location = base_url()."year_create_proc.php"; ?>
				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
							<label class="control-label">School Year:</label>
							<div class="controls">
								<input type="text" name="year" class="span4"  required placeholder="Input School Year">
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Save changes</button>
							<a class="btn" href="school_yr_manage.php">Cancel</a>
						</div>
						</fieldset>
						</form>
						

						<?php include "admin_footer.php"?>
