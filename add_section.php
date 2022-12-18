<?php include 'admin_header.php';
$acct_type = _get_accttype_from_id($_SESSION['id']);
if ($acct_type=="2"){
	header("Location: no_access.php");
}
?>
<h1 class="page-header"><b>Senior High School</b></h1>
<ul class="nav nav-tabs">
						

					
					<li  class="active" ><a href="<?= base_url() ?>section_manage.php"><span class="hidden-tablet">Section</span></a></li>
						<li><a href="<?= base_url() ?>strand_manage.php"><span class="hidden-tablet">Strand</span></a></li>
						<li><a href="<?= base_url() ?>school_yr_manage.php"><span class="hidden-tablet">School Year</span></a></li>
					

					<div class="box-content">

	

			<div class="box-content">
				<?php $form_location = base_url()."section_create_proc.php"; ?>
				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
					<div class="control-group">
						
							<label class="control-label">Section ID:</label>
							<div class="controls">
								<input type="text" name="section_id" required>
							</div>
						</div>
						
							
						<div class="control-group">
						
							<label class="control-label">Strand:</label>
							<div class="controls">
								<select name="strand_id" autocomplete="off" required style="width: 40%;">
								<option value="">SELECT STRAND</option>
								<?php
								$tablename = "strand";
								$result = get($tablename);

								foreach ($result as $key => $row) {
									?>
 								<option value="<?= $row["strand_id"]?>"><?= $row['strand'] ?></option>
									<?php
								}
								 ?>
								</select>
							</div>
						</div>
						<div class="control-group">
						
							<label class="control-label">Year Level:</label>
							<div class="controls">
							<select name="year_level" autocomplete="off" required style="width: 40%;">
							<option value="">SELECT YEAR LEVEL</option>
								<?php
								$tablename = "year_level";
								$result = get($tablename);

								foreach ($result as $key => $row) {
									?>
 								<option value="<?= $row["year_level"]?>"><?= $row['year_level'] ?></option>
									<?php
								}
								 ?>
								 </select>
							</div>
						</div>
						<div class="control-group">
						
							<label class="control-label">School Year:</label>
							<div class="controls">
							<select name="year" autocomplete="off" required style="width: 40%;">
							<option value="">SELECT SCHOOL YEAR</option>
								<?php
								$tablename = "school_yr";
								$result = get($tablename);

								foreach ($result as $key => $row) {
									?>
 								<option value="<?= $row["year"]?>"><?= $row['year'] ?></option>
									<?php
								}
								 ?>
								 </select>
							</div>
						</div>
						<div class="control-group">
						
							<label class="control-label">Section Name:</label>
							<div class="controls">
								<input type="text" name="section_name" required placeholder="Input Section Name">
							</div>
						</div>
						

						

						
						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Save changes</button>
							<a class="btn" href="section_manage.php">Cancel</a>
						</div>
						</fieldset>
						</form>
					
						<?php include "admin_footer.php"?>
