<?php include 'admin_header.php';
$acct_type = _get_accttype_from_id($_SESSION['id']);
if ($acct_type=="2"){
	header("Location: no_access.php");
}
?>
<h1 class="page-header"><b>Add Reason</b></h1>
<ul class="nav nav-tabs">
<li ><a href="<?= base_url() ?>attendance.php"><span class="hidden-tablet">Absent</span></a></li>				
<li  ><a href="<?= base_url() ?>attendance_late.php"><span class="hidden-tablet">Late</span></a></li>
<li class="active"><a href="<?= base_url() ?>reason_manage.php"><span class="hidden-tablet"> Reason</span></a></li>

						</ul>
					<div class="box-content">

	

			<div class="box-content">
				<?php $form_location = base_url()."reason_create_proc.php"; ?>
				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
					
						<div class="control-group">
						
							<label class="control-label">Reason:</label>
							<div class="controls">
							<textarea class="span4" name="reasons" required></textarea>
							</div>
						</div>

						

						
						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Save changes</button>
							<a class="btn" href="reason_manage.php">Cancel</a>
						</div>
						</fieldset>
					
				</div>
				</form>
		
			

						<?php include "admin_footer.php"?>
