<?php include "admin_header.php";

?>
<script language="javascript" src="attendance.js" type="text/javascript"></script>
<h1 class="page-header">Students</h1>
<!-- main content -->
	<div class="box-content">


<form class="form-horizontal" method="post" action="<?= $form_location ?>">

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2>Students</h2>
			</div>
			<div class="box-content">
			<h3>Input Date</h3><input type="date" name="date">
			<br><br>
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				
				  <thead>
					  <tr>
					   	<th>Attendance</th>
					   	<th></th>
					  	  <th>First Name</th>
						  <th>Last Name</th>
						  <th>Gender</th>
						  <th>Section</th>
						  <th>Strand</th>
					  </tr>
				  </thead>   
				  <tbody>
 
				  		<?php 
				  		$table_name = "students";

				  		//get all records from users table
						$user_data = get($table_name);
                        $serialnumber = 0;
                       
						//fetch result set and pass it to an array (associative)
				  		foreach ($user_data as $key => $row) {
				  			$serialnumber++;
						$fname = $row['fname'];
						$lname = $row['lname'];
						$gender = $row['gender'];
						$section = $row['section'];
						$strand = $row['strand'];
						$id = $row['id'];
						$no_pres = $row['no_pres'];
						$no_abs = $row['no_abs'];
						$no_late = $row['no_late'];  	
				  ?>
			
					<tr>
					     <td class="center">

						<input type="checkbox" name="attendance_status[]" value="<?= $id ?>" ></td>
						</td>
					    <td class="center"><?= $serialnumber ?></td>
						
						<td class="center"><?= $fname ?><input type="hidden" value="<?= $fname ?>" name="fname"></td>
						<td class="center"><?= $lname ?><input type="hidden" value="<?= $lname ?>" name="lname"></td>
						<td class="center"><?= $gender ?><input type="hidden" value="<?= $gender ?>" name="gender"></td>
						<td class="center"><?= $section ?><input type="hidden" value="<?= $section ?>" name="section"></td>
						<td class="center"><?= $strand ?><input type="hidden" value="<?= $strand ?>" name="strand"></td>
							
					</tr>

					<?php } ?>

				  </tbody>
				</table>
             


				<div>
               <input type="submit" name="attendance"  class="btn btn-info" value="present">
               <input type="submit" name="attendance" class="btn btn-primary" value="late">
               <input type="submit" name="attendance" class="btn btn-danger" value="asbsent">
			</div>
		</div>
	</div>
</div>

<div>
<button type="submit" class="btn btn-primary" name="submit" value="submit">Save Attendance</button>
</div>

<!-- close main content -->

<?php include "admin_footer.php"; ?>