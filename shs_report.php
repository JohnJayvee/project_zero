<?php include "admin_header.php";


?>

<h1 class="page-header"><b>STRAND</b></h1>

<!-- main content -->




<div class="box-content">

	<table class="table table-striped table-bordered bootstrap-datatable datatable">
		<thead>
			<tr>

				<th>Strand Name</th>
				<th>Strand Initials</th>
				<th class="span4">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php
                  $table_name = "strand";
                  // $id = $_SESSION['id'];
                  
                  //get all records from users table
                  $user_data = get($table_name);

                  //fetch result set and pass it to an array (associative)
                  foreach ($user_data as $key => $row) {

	                  $strand_id = $row['strand_id'];
	                  $strand = $row['strand'];
	                  $strand_initials = $row['strand_initials'];

	                  //$studid = get_studid_from_id(id)
                  	$edit_user_url = base_url() . 'strand_edit.php?id=' . $id;
	                  $delete_user_url = base_url() . 'strand_deleteconf.php?id=' . $id;
	                  $student_url = base_url() . 'shs_report_section.php?id=' . $strand_id;


                  ?>
			<tr>

				<td class="center">
					<?= $strand ?>
				</td>
				<td class="center">
					<?= $strand_initials ?>
				</td>





				<td class="center">
					<!-- <a class="btn btn-primary" href="<?= $student_url ?>"> -->
					<a class="btn btn-primary" href="<?= $student_url ?>">VIEW STRAND</a>


				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>


<!-- close main content -->

<?php include "admin_footer.php"; ?>