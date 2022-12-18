<?php include "admin_header.php";

?>
<script language="javascript" src="attendance.js" type="text/javascript"></script>
<h1 class="page-header">Students</h1>
<!-- main content -->

<h3><div class="well text-center"><?php echo date("m-d-y"); ?></div></h3>
	<div class="box-content">


<form class="form-horizontal" method="post" >

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2>Students</h2>
			</div>
			<div class="box-content">
			<br><br>
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				
				  <thead>
					  <tr>
					   	<th>Attendance</th>
              <th></th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Year Level</th>
                <th>Section</th>
                <th>Strand</th>
						  
					  </tr>
				  </thead>   
				  <tbody>
  <?php 
 


              $user_data = get_join_attendance('students', 'attendance_records','studid',0);
              //get all records from users table
          
                       
            //fetch result set and pass it to an array (associative)


              foreach ($user_data as $key => $row) {
                $serialnumber++;
            $id = $row['studid'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $strand = $row['strand'];
            $section = $row['section'];
            $year_level = $row['year_level'];

            $attendance_status = $row['attendance_status']
              
          ?>
      
          <tr>
               <td class="center">

            <input type="checkbox" name="attendance_status[]" value="<?= $id ?>" ></td>
            </td>
              <td class="center"><?= $serialnumber ?></td>
            
            <td class="center"><?= $fname ?></td>
            <td class="center"><?= $lname ?></td>
            <td class="center"><?= $year_level ?></td>
            <td class="center"><?= $section ?></td>
            <td class="center"><?= $strand ?></td>
               </tr>

          <?php } ?>
				  </tbody>
				</table>



			<div>
               <input type="submit" name="attendance" class="btn btn-info" value="present">
               <input type="submit" name="attendance" class="btn btn-primary" value="late">
               <input type="submit" name="attendance" class="btn btn-danger" value="absent">
			</div>
			<?php
$table_name ="attendance_records";
$attendance = $_POST['attendance_status'];
foreach ($attendance as $key => $value) {
	$value = $id;
	$get_attendance = get_where($table_name, $id);
	
if($_POST['attendance'] == "present"){
	foreach ($get_attendance as $key => $value) {
		$attendance_status = $row['attendance_status'];
		$attendance = $attendance_status + "1";
										}
 				$user_editedvalues = array (
					"attendance_status" => $attendance
											);
			update($user_editedvalues, $id, $table_name);
}elseif ($_POST['attendance'] == "late") {
	foreach ($get_attendance as $key => $value) {
	$attendance_status = $row['attendance_status'];
		$attendance = $attendance_status + "2";
										}
 				$user_editedvalues = array (
					"attendance_status" => $attendance
											);
}elseif ($_POST['attendance'] == "absent") {
	foreach ($get_attendance as $key => $value) {
	$attendance_status = $row['attendance_status'];
		$attendance = $attendance_status + "3";
										}
 				$user_editedvalues = array (
					"attendance_status" => $attendance
											);
}
}
 ?>

		</div>
	</div>
</div>
</form>


<!-- close main content -->

<?php include "admin_footer.php"; ?>