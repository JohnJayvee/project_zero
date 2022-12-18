<?php include 'admin_header.php';
$acct_type = _get_accttype_from_id($_SESSION['id']);
if ($acct_type=="2"){
	header("Location: no_access.php");
}
?>
<h1 class="page-header"><b>Add SHS</b></h1>
<ul class="nav nav-tabs">
						

						
						<li class="active"><a href="<?= base_url() ?>add_shs.php"><span class="hidden-tablet">Add Strand</span></a></li>
						<li><a href="<?= base_url() ?>student_create.php"><span class="hidden-tablet"> Add Student</span></a></li>
					
						
					</ul>
					<div class="box-content">

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Strand</h2>
			</div>

			<div class="box-content">
				<?php $form_location = base_url()."strand_create_proc.php"; ?>
				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>

						<div class="control-group">
						
							<label class="control-label">strand:</label>
							<div class="controls">
								<input type="text" name="strand" class="span4" required>
							</div>
						</div>

						

						
						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Save changes</button>
							<a class="btn" href="student_manage.php">Cancel</a>
						</div>
<br><br><br><br><br>
						<?php include "admin_footer.php"?>
