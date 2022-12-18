<?php include "admin_header.php"; 

session_start();

$id = $_GET['id'];
$_SESSION['section_id']=$id;


$student_url = base_url().'shs_report_student_print.php?id='.$section_id;
?>

<h1 class="page-header"><b>SECTION </b></h1>

<!-- main content -->


<div class="box-content">

	<a href="<?= $student_url ?>" class="button btn btn-success">Print</a>
	<br><br>

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2>Sections</h2>
			</div>

			<div class="box-content">

				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>Section ID</th>
							<th>Number of Absences</th>
							<th>Number of Lates</th>

						</tr>
					</thead>   
					<tbody>
						<?php 

				  		//get all records from users table
						//$strand_data = get_join_student_attendance('students','attendance_records', 'studid','1',$id);
						$student_data = get_where_section('students',$id);
						foreach ($student_data as $key => $row) {
							$id = $row['id'];
							$studid=$row['studid'];
							$fname = $row['fname'];
							$lname = $row['lname'];




						//$studid = get_studid_from_id(id)
				  		// $edit_user_url = base_url().'strand_edit.php?id='.$id;


							?>
							<tr>
								<td class="center"><?php echo  $fname." ".$lname; ?></td>
								<?php
								$absent = count_attendance(3,$studid);
								$late = count_attendance(2,$studid);
								?>

								<td class="center"><?=  $absent ?></td>
								<td class="center"><?= $late ?></td>
							<?php } ?>

						</tr>

					</tbody>
				</table> 
			</div>
		</div>
	</div>
</div>

<!-- close main content -->

<?php include "admin_footer.php"; ?>