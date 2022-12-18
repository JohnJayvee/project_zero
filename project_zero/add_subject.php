<?php include 'admin_header.php';
$acct_type = _get_accttype_from_id($_SESSION['id']);
if ($acct_type=="2"){
	header("Location: no_access.php");
}
?>
<h1 class="page-header"><b>Add SHS</b></h1>
<ul class="nav nav-tabs">
						

						
						<li ><a href="<?= base_url() ?>add_shs.php"><span class="hidden-tablet">Add Strand</span></a></li>
						<li ><a href="<?= base_url() ?>add_shs_yr.php"><span class="hidden-tablet"> Add School Year</span></a></li>
						<li class="active"><a href="<?= base_url() ?>add_subject.php"><span class="hidden-tablet"> Add Subject</span></a></li>
					
						
					</ul>
					<div class="box-content">

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2>Strand</h2>
			</div>

			<div class="box-content">
				<?php $form_location = base_url()."reason_create_proc.php"; ?>
				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
						<div class="control-group">
						
							<label class="control-label">Reason:</label>
							<div class="controls">
							<textarea class="span4" name="reason" required></textarea>
							</div>
						</div>

						

						
						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Save changes</button>
							<a class="btn" href="student_manage.php">Cancel</a>
						</div>
						</fieldset>
						</form>
						</div>
						</div>
						<?php include "admin_footer.php"?>
