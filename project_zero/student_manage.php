<?php include "admin_header.php"; 

$acct_type = _get_accttype_from_id($_SESSION['id']);
if ($acct_type=="2"){
	header("Location: no_access.php");
}



?>

<h1 class="page-header"><b>Students</b></h1>

<!-- main content -->
<ul class="nav nav-tabs">
						
						<li class="active"><a href="<?= base_url() ?>student_manage.php"><span class="hidden-tablet">All Students</span></a></li>
						
						<li><a href="<?= base_url() ?>student_create.php"><span class="hidden-tablet"> Add Students</span></a></li>
						

						
					</ul>


    
			<div class="box-content">
		
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <thead>
					  <tr>
					  	  <th>Student ID</th>
						  <th> First Name</th>
						  <th> Last Name</th>

						  <th> Gender</th>
						  <th>Year & Section</th>
						  <th>School Year</th>
						  <th class="span4">Actions</th>
					  </tr>
				  </thead>   
				  <tbody>
				  <?php 
				  		$table_name = "students";
				  		// $id = $_SESSION['id'];

				  		//get all records from users table
						$user_data = get_section_join($table_name,'section','section_id');

						//fetch result set and pass it to an array (associative)
				  		foreach ($user_data as $key => $row) {
				  		$id = $row['id'];
				  		$studid = $row['studid'];
						$fname = $row['fname'];
						$lname = $row['lname'];
						$strand = $row['strand'];
						$date = $row['date'];
						$year_level = $row['year_level'];
						$section_name = $row['section_name'];
						$gender = $row['gender'];
						$school_yr = $row['year'];
						//$studid = get_studid_from_id(id)
				  		$edit_user_url = base_url().'student_edit.php?id='.$studid;
				  		$student_url = base_url().'student_profile_proc.php?id='.$studid;


				  ?>
					<tr>
						<td class="center"><?= $studid ?></td>
						<td class="center"><?= $fname ?></td>
						<td class="center"><?= $lname ?></td>
						<td class="center"><?= $gender?></td>
						<td class="center"><?= $year_level." - ".$section_name?></td>
						<td class="center"><?= $school_yr ?></td>
						
						
						<td class="center">
							<!-- <a class="btn btn-primary" href="<?= $student_url ?>"> -->
							<a class="btn btn-primary" href="student_profile_proc.php?id=<?= $studid ?>">View Profile </a>
								
							</a>
							
						</td>
					</tr>
					<?php } ?>
				  </tbody>
				</table> 
			</div>


<!-- close main content -->

<?php include "admin_footer.php"; ?>