<?php include "admin_header.php"; ?>

<button> <a href="print_stud_rec.php">  EXPORT PDF </a> </button>


<br> <br>
<div class="row-fluid sortable" style="border-color: red;">
<?php
	//get user ID from URL
	$id = $_GET['id'];
	$table_name = "students";

	//select user record where ID (column from table) = user ID from URL 
	$get_student = get_where($table_name, $id);

	//fetch result and pass it  to an array
	foreach ($get_student as $key => $row) {
		$id =  $row['id'];
		$studid = $row['studid'];
		$fname =  $row['fname'];
		$lname = $row['lname'];
		$strand = $row['strand'];
		$section = $row['section'];
		$school_yr = $row['school_yr'];
		$no_pres = $row['no_pres'];
		$no_abs = $row['no_abs'];
		$no_late = $row['no_late'];
	
	?>	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><?= "Student Number:&nbsp;".$studid ?></h2>
			</div>
    
			<div class="box-content">
                <h2><label>Name of the student:&nbsp;<b style="text-transform: uppercase"><?= $fname." ".$lname?></b></label>
                <label>Year and Section:&nbsp;<b style="text-transform: uppercase"><?= $section?></b></label>
                <label>Strand:&nbsp;<b style="text-transform: uppercase"><?= $strand?></b></label>
                <label>School Year:&nbsp;<b style="text-transform: uppercase"><?= $school_yr?></b></label>
                <label>Absences:&nbsp;<b style="text-transform: uppercase"><?= $no_abs?></b></label>
                <label>Tardiness:&nbsp;<b style="text-transform: uppercase"><?= $no_late?></b></label></h2>



                <?php } ?>
			</div>
			</div>
			</div>
			
<?php include "admin_footer.php" ?>