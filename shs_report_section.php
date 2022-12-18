<?php include "admin_header.php";


?>
<?php
session_start();
$table_name = "strand";
$id = $_GET['id'];
$_SESSION['strand_id'] = $id;
?>

<h1 class="page-header"><b>SECTION</b></h1>

<!-- main content -->



<div class="box-content">

	<table class="table table-striped table-bordered bootstrap-datatable datatable">
		<thead>
			<tr>
				<th>Year Level</th>
				<th>Section Name</th>
				<th>School Year</th>
				<th class="span4">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php
            $table_name = "section";

            //get all records from users table
            $strand_data = get_wet_try($table_name, $id);


            foreach ($strand_data as $key => $row) {
	            $section_id = $row['section_id'];
	            $year_level = $row['year_level'];
	            $year = $row['year'];
	            $section_name = $row['section_name'];



	            //$studid = get_studid_from_id(id)
            	$student_url = base_url() . 'shs_report_student.php?id=' . $section_id;


            ?>
			<tr>
				<td class="center">
					<?= $year_level ?>
				</td>
				<td class="center">
					<?= $section_name ?>
				</td>
				<td class="center">
					<?= $year ?>
				</td>







				<td class="center">
					<!-- <a class="btn btn-primary" href="<?= $student_url ?>"> -->
					<a class="btn btn-primary" href="<?= $student_url ?>">VIEW SECTION</a>


				</td>
			</tr>
			<?php }
                ?>
		</tbody>
	</table>
</div>

<!-- close main content -->

<?php include "admin_footer.php"; ?>