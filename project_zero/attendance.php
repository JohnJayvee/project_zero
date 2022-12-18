<?php include "admin_header.php";

?>
<script language="javascript" src="attendance.js" type="text/javascript"></script>
<h1 class="page-header">Students</h1>
<!-- main content -->
	<div class="box-content">




	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2>Students</h2>
			</div>
			<div class="box-content">
			<?php $create_attendance = base_url()."attendance_chec.php"; ?>
			<a href="<?= $create_attendance ?>">
			<button class="btn btn-success" >Do Attendance</button></a>
			<br><br>
			
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<form method="POST" action="view_attendance.php">
				 <thead>
					  <tr>
					  <th></th>
					   	<th>Date</th>
					  	  <th>View Attendance</th>
					  </tr>
					  <tr>
					   </thead>
				<?php
				$table_name = "attendance_records";
				$user_data = distinct($table_name);
				$serial_number = "0";
				foreach ($user_data as $key => $row) {
					$studid = $row['studid'];
					$date = $row['date'];
				$serial_number++;

				 ?>
				 
					   <tbody>
					   <td class="center"><?= $serial_number ?></td>
					  	<td class="center"><?= $date ?></td>
					  	  <td class="center"><input type="submit" value="View Attendence" name="submit" class="btn btn-primary"></td>
					  	
					  </tr>
					  <?php }?>
				    </tbody>
				 </table>
				 </div>
				 </div>
				 </div>
				 </form>
<!-- close main content -->

<?php include "admin_footer.php"; ?>