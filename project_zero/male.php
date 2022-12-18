<?php include "admin_header.php"; 

$acct_type = _get_accttype_from_id($_SESSION['id']);
if ($acct_type=="2"){
	header("Location: no_access.php");
}
?>

<h1 class="page-header"><b>Students</b></h1>

<!-- main content -->
<ul class="nav nav-tabs">
						
						<li><a href="<?= base_url() ?>student_manage.php"><span class="hidden-tablet">All Students</span></a></li>
						
						<li class="active"><a href="<?= base_url() ?>male.php"><span class="hidden-tablet">Male</span></a></li>
						<li><a href="<?= base_url() ?>female.php"><span class="hidden-tablet">Female</span></a></li>
						<li><a href="<?= base_url() ?>student_create.php"><span class="hidden-tablet"> Add</span></a></li>
						

						
					</ul>

<div class="box-content">

	


	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2>Students</h2>
			</div>
    
			<div class="box-content">
		
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <thead>
					  <tr>
					  	  <th>Student ID</th>
						  <th> First Name</th>
						  <th> Last Name</th>
						  <th> Strand</th>
						  <th> Section</th>
						  <th> Gender</th>
						  <th> Attendance</th>
						  <th class="span4">Actions</th>
					  </tr>
				  </thead>   
				  <tbody>
				  <?php 
				  		$table_name = "students";
    					$column = "gender";
    					$value = "male";
				  		//get all records from users table
						$user_data = get_where_custom($table_name, $column, $value);

						//fetch result set and pass it to an array (associative)
				  		foreach ($user_data as $key => $row) {
						$studid = $row['studid'];
						$fname = $row['fname'];
						$lname = $row['lname'];
						$strand = $row['strand'];
						$section = $row['section'];
						$gender = $row['gender'];
						$id = $row['id'];

				  		$edit_user_url = base_url().'student_edit.php?id='.$id;
				  		$delete_user_url = base_url().'student_deleteconf.php?id='.$id;
				  ?>
					<tr>
						<td class="center"><?= $studid ?></td>
						<td class="center"><?= $fname ?></td>
						<td class="center"><?= $lname ?></td>
						<td class="center"><?= $gender?></td>
						<td class="center"><?= $strand ?></td>
						<td class="center"><?= $section?></td>
						
						<td class="center"><a>View Attendance</a></td>
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
		</div>
	</div>
</div>

<!-- close main content -->

<?php include "admin_footer.php"; ?>