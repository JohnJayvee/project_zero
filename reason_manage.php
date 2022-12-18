<?php include "admin_header.php"; 

$acct_type = _get_accttype_from_id($_SESSION['id']);
if ($acct_type=="2"){
	header("Location: no_access.php");
}



?>

<h1 class="page-header"><b>REASON</b></h1>

<!-- main content -->
<ul class="nav nav-tabs">
<li ><a href="<?= base_url() ?>attendance.php"><span class="hidden-tablet">Absent</span></a></li>				
<li  ><a href="<?= base_url() ?>attendance_late.php"><span class="hidden-tablet">Late</span></a></li>
<li class="active"><a href="<?= base_url() ?>reason_manage.php"><span class="hidden-tablet"> Reasons</span></a></li>

						</ul>
<ul class="nav nav-tabs">


    <div class="box-content">
    <a href="<?= base_url() ?>add_reason.php">
    	<input class="btn btn-success" type="submit" name="submit" value="Add Reason" >
    	</a>
    </div>
			<div class="box-content">
		
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <thead>
					  <tr>
					
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
				  		$delete_user_url = base_url().'reason_delete_conf.php?id='.$id;
				  		
				  ?>
					<tr>
						<td class="center span4">
							<?= $reasons ?>
							</td>
							

						<td class="center">
							<a class="btn btn-danger" href="<?= $delete_user_url ?>">
								<i class="halflings-icon white trash"></i> delete 
							</a>
							<a class="btn btn-info" href="<?= $edit_user_url ?>">
								<i class="halflings-icon white edit"></i> edit
							</a>
						</td>
					</tr>
					<?php } ?>
				  </tbody>
				</table> 
			</div>

						</form>
						
						<?php include "admin_footer.php"?>