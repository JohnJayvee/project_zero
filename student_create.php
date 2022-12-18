<?php include "admin_header.php";
include "perfect_date.php";
?>



<h1 class="page-header"><b>Students</b></h1>


<!-- main content -->
<ul class="nav nav-tabs">

	<li><a href="<?= base_url() ?>student_manage.php"><span class="hidden-tablet">All Students</span></a></li>
	<li class="active"><a href="<?= base_url() ?>student_create.php"><span class="hidden-tablet"> Add Student</span></a>
	</li>



</ul>




<div class="box-content">

	<?php $form_location = base_url() . "student_create_proc.php"; ?>

	<div class="box-content">
		<form class="form-horizontal" method="post" action="<?= $form_location ?>">
			<fieldset>
				<div class="control-group">
					<label class="control-label">Student ID:</label>
					<div class="controls">
						<input type="text" class="form-control" name="studid" required style="width: 40%;"
							autocomplete="off" placeholder="Enter Student ID">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">First Name:</label>
					<div class="controls">
						<input type="text" class="form-control" name="fname" required style="width: 40%;"
							autocomplete="off" placeholder="Enter First Name">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Middle Name:</label>
					<div class="controls">
						<input type="text" class="form-control" name="mname" required style="width: 40%;"
							placeholder="Enter Middle Name">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">Last Name:</label>
					<div class="controls">
						<input type="text" class="form-control" name="lname" required style="width: 40%;"
							placeholder="Enter Last Name">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Gender:</label>
					<div class="controls">
						<select name="gender" autocomplete="off" required style="width: 40%;">
							<option value="">SELECT GENDER</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
				</div>



				<div class="control-group">
					<label class="control-label">Strand:</label>
					<div class="controls">
						<select name="strand_id" id="strand_id" autocomplete="off" required style="width: 40%;">
							<option value="">SELECT STRAND</option>
							<?php
                                $tablename = "strand";
                                $result = get($tablename);

                                foreach ($result as $key => $row) {
	                                $strand_name = $row["strand"]
                                	?>
							<option value="<?= $row['strand_id'] ?>">
								<?= $row['strand'] ?>
							</option>
							<?php
                                }
                                    ?>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">Section:</label>
					<div class="controls">
						<select name="section_id" id="section_id" autocomplete="off" required style="width: 40%;">
							<option value="">SELECT SECTION</option>
						</select>
					</div>
				</div>

				<br><br>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary btn-lg" name="submit" value="Submit">Add
						student</button>
					<a class="btn btn-warning" href="student_manage.php">Cancel</a>
				</div>

	</div>
	</fieldset>
	</form>
</div>
</div>

<!-- close main content -->
<script type="text/javascript">
	$(document).ready(function () {
		$('#strand_id').on('change', function () {
			var countryID = $(this).val();
			if (countryID) {
				$.ajax({
					type: 'POST',
					url: 'ajax.php',
					data: 'strand_id=' + countryID,
					success: function (html) {
						$('#section_id').html(html);
						//$('#city').html('<option value="">Select state first</option>'); 
					}
				});
			} else {
				$('#section_id').html('<option value="">Select country first</option>');
				//$('#city').html('<option value="">Select state first</option>'); 
			}
		});
	});
</script>
<?php include "admin_footer.php"; ?>