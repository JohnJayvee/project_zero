<?php include 'admin_header.php';
$acct_type = _get_accttype_from_id($_SESSION['id']);
if ($acct_type == "2") {
	header("Location: no_access.php");
}
?>
<h1 class="page-header"><b>Senior High School</b></h1>
<ul class="nav nav-tabs">



	<li><a href="<?= base_url() ?>add_shs.php"><span class="hidden-tablet">Section</span></a></li>
	<li><a href="<?= base_url() ?>add_shs_yr.php"><span class="hidden-tablet">Strand</span></a></li>
	<li><a href="<?= base_url() ?>add_subject.php"><span class="hidden-tablet">School Year</span></a></li>
	<li class="active"><a href="<?= base_url() ?>add_subject.php"><span class="hidden-tablet">Add to SHS</span></a></li>

</ul>
<ul class="nav nav-tabs">



	<li class="active"><a href="<?= base_url() ?>add_shs.php"><span class="hidden-tablet">Add Strand</span></a></li>
	<li><a href="<?= base_url() ?>add_shs_yr.php"><span class="hidden-tablet"> Add School Year</span></a></li>
	<li><a href="<?= base_url() ?>add_subject.php"><span class="hidden-tablet"> Add Subject</span></a></li>


</ul>
<div class="box-content">

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2>Section</h2>
			</div>

			<div class="box-content">
				<?php $form_location = base_url() . "strand_create_proc.php"; ?>
				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
						<div class="control-group">

							<label class="control-label">Section ID:</label>
							<div class="controls">
								<input type="text" name="section_id" required>
							</div>
						</div>
						<div class="control-group">

							<select name="strand_id" autocomplete="off" required style="width: 40%;">
								<option value="">SELECT STRAND</option>
								<?php
                                $tablename = "strand";
                                $result = get($tablename);

                                foreach ($result as $key => $row) {
                                ?>
								<option value="<?= $row["strand_id"] ?>">
									<?= $row['strand'] ?>
								</option>
								<?php
                                }
                                    ?>
							</select>
						</div>
						<div class="control-group">

							<select name="year_level_id" autocomplete="off" required style="width: 40%;">
								<option value="">SELECT YEAR_LEVEL</option>
								<?php
                                $tablename = "year_level";
                                $result = get($tablename);

                                foreach ($result as $key => $row) {
                                ?>
								<option value="<?= $row["year_level_id"] ?>">
									<?= $row['year_level_id'] ?>
								</option>
								<?php
                                }
                                    ?>
							</select>
						</div>
						<div class="control-group">

							<label class="control-label">Section Name:</label>
							<div class="controls">
								<textarea name="section_name" class="span6" required></textarea>
							</div>
						</div>





						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Save
								changes</button>
							<a class="btn" href="student_manage.php">Cancel</a>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
		<?php include "admin_footer.php" ?>