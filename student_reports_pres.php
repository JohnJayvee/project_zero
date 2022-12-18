<?php include 'admin_header.php';
?>
<h1 class="page-header"><b>Attendance</b></h1>

<!-- main content -->
<ul class="nav nav-tabs">

	<li class="active"><a href="<?= base_url() ?>student_manage.php"><span class="hidden-tablet">Absents
				Report</span></a></li>

	<li><a href="<?= base_url() ?>male.php"><span class="hidden-tablet">Late Report</span></a></li>
	<li><a href="<?= base_url() ?>female.php"><span class="hidden-tablet">Present Report</span></a></li>


</ul>


<?php
                  $table_name = "students";

                  //get all records from users table
                  $user_data = get($table_name);

                  //fetch result set and pass it to an array (associative)
                  foreach ($user_data as $key => $row) {
	                  $studid = $row['studid'];
	                  $fname = $row['fname'];
	                  $lname = $row['lname'];
	                  $strand = $row['strand'];
	                  $section = $row['section'];
	                  $gender = $row['gender'];
	                  $school_yr = $row['school_yr'];
	                  $id = $row['id'];
	                  $no_abs = $row['no_abs'];
	                  $no_pres = $row['no_pres'];
	                  $no_late = $row['no_late'];

	                  $view_user_url = base_url() . 'student_attendance.php?id=' . $id;

                  ?>


<table class='table-responsive' border="0">
	<tr>
		<td width="50000px">
			<h4>
				<b>
					<?= $lname ?>, <?= $fname ?>
				</b>
				<br>
				<?= $year . ' ' . $section ?>
			</h4>

			<?php
	                  $table_name = "students";
	                  $setName = $no_late + $no_pres + $no_abs;
	                  $total_num_pres = count_attendance($table_name, $setName);
	                  $percentage = (100 * $no_pres) / $total_num_pres;
                  ?>

			<div class="progress" style="text-align: center;">
				<span style=" position: absolute;margin-left: -50px;">
					<?= $no_pres ?> Present ( <?=(round($percentage, 2)) ?>% )
				</span>
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30" aria-valuemin="30"
					aria-valuemax="100" style="width:<?= $percentage ?>%;">
				</div>
			</div>
		</td>
	</tr>
</table>

<?php
                  }
                  ?>
</div>
</div>
</div>
</div>

<?php include 'admin_footer.php' ?>