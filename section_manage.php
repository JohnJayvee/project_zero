<?php include "admin_header.php";

$acct_type = _get_accttype_from_id($_SESSION['id']);
if ($acct_type == "2") {
	header("Location: no_access.php");
}



?>

<h1 class="page-header"><b>SECTION</b></h1>

<!-- main content -->
<ul class="nav nav-tabs">


	<li class="active"><a href="<?= base_url() ?>section_manage.php"><span class="hidden-tablet">Section</span></a></li>
	<li><a href="<?= base_url() ?>strand_manage.php"><span class="hidden-tablet">Strand</span></a></li>
	<li><a href="<?= base_url() ?>school_yr_manage.php"><span class="hidden-tablet">School Year</span></a></li>


</ul>
<ul class="nav nav-tabs">

	<div class="box-content">
		<a href="<?= base_url() ?>add_section.php">
			<input class="btn btn-success" type="submit" name="strand" value="Add Section">
		</a>
	</div>
	<div class="box-content">

		<table class="table table-striped table-bordered bootstrap-datatable datatable">
			<thead>
				<tr>

					<th>Section Name</th>
					<th>Year Level</th>

					<th>School Year</th>
					<th>Actions</th>

				</tr>
			</thead>
			<tbody>
				<?php
                  $table_name = "section";

                  // $id = $_SESSION['id'];
                  
                  //get all records from users table
                  $user_data = get($table_name);

                  //fetch result set and pass it to an array (associative)
                  foreach ($user_data as $key => $row) {
	                  $id = $row['id'];

	                  $section_name = $row['section_name'];

	                  $year_level_id = $row['year_level'];
	                  $school_yr = $row['year'];
	                  //$studid = get_studid_from_id(id)
                  	$edit_user_url = base_url() . 'section_edit.php?id=' . $id;
	                  $delete_user_url = base_url() . 'section_deleteconf.php?id=' . $id;



                  ?>
				<tr>

					<td class="center">
						<?= $section_name ?>
					</td>
					<td class="center">
						<?= $year_level_id ?>
					</td>

					<td class="center">
						<?= $school_yr ?>
					</td>
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

	<!-- close main content -->

	<?php include "admin_footer.php"; ?>