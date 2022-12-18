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
						<br><br><br>
						<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <thead>
					  <tr>
					  	  <th>&nbsp;</th>
						  <th>Reasons</th>
						  <th class="span4">Actions</th>
					  </tr>
				  </thead>   
				  <tbody>
				  <?php 
				  		$table_name = "reasons";
				  	
				  		//get all records from users table
						$user_data = get($table_name);

						//fetch result set and pass it to an array (associative)
				  		foreach ($user_data as $key => $row) {

						$reasons = $row['reasons'];
						
						$id = $row['id'];

				  		$edit_user_url = base_url().'reason_edit.php?id='.$id;
				  		$delete_user_url = base_url().'reason_deleteconf.php?id='.$id;
				  		
				  ?>
					<tr>
						<td class="center span2">
							<?= $reason ?>
							</td>

						<td class="center">
							<a class="btn btn-danger" href="<?= $delete_reason_url ?>">
								<i class="halflings-icon white trash"></i> delete 
							</a>
							<a class="btn btn-info" href="<?= $edit_reason_url ?>">
								<i class="halflings-icon white edit"></i> edit
							</a>
						</td>
					</tr>
					<?php } ?>
				  </tbody>
				</table> 
			</div>

						</form>
						</div>
						</div>
						<?php include "admin_footer.php"?>
