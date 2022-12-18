<?php include 'admin_header.php' ?>
<h1 class="page-header">Students</h1>
<!-- main content -->

<body>
	HELLO
</body>

<?php 
				  		$table_name = "students";
				  		$id = $_GET['id'];

				  // 		//get all records from users table
						// $user_data = get_where_join('students','attendance_records', 'studid');

						// //fetch result set and pass it to an array (associative)
				  // 		foreach ($user_data as $key => $row) {
						// $studid = $row['studid'];
						// $attendance_status = $row['attendance_status'];
						// $date = $row['date'];
						// $fname = $row['fname'];
						// $lname = $row['lname'];
						// $mname = $row['mname'];
						// $strand = $row['strand'];
						// $date = $row['date'];
						// $year_level = $row['year_level'];
						// $section = $row['section'];
						// $gender = $row['gender'];
						// $school_yr = $row['school_yr'];
				  	
				  ?>

<h1 class="page-header"><b>Students</b></h1>

<h1>
	<div class="well text-center">
		<h2><label>NAME:&nbsp;<?= $fname." ".$mname." ".$lname ?></label>
			<label>Year and Section:&nbsp;<?= $year_level." ".$section ?></label>
			<label>Strand:&nbsp;<?= $strand ?></label>
			<label>Gender:&nbsp;<?= $gender ?></label>
		</h2>
	</div>
</h1>
<div class="box-content">
	<?php } ?>

	<table border="2">
		<thead>
			<tr>
				<th class="center">Attendance</th>
				<th class="center">Date</th>
				<th class="center">Edit</th>
			</tr>
		</thead>
	</table>
	<?php include 'admin_footer.php' ?>