<?php include "admin_header.php"; ?>

<h1 class="page-header">Promote Student</h1>

<!-- main content -->
<?php
	//get user ID from URL
	

	
$id = $_GET['id'];

	$form_location = base_url()."student_edit_proc.php?id=".$id; 

	//select user record where ID (column from table) = user ID from U

	//fetch result and pass it  to an array
	
	?>
<div class="box-content">

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span><?=$fname." ".$lname?></h2>
			</div>
			<div class="box-content">

				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
						<div class="control-group">
							<label class="control-label" >Strand:</label>
							<div class="controls">
								<select name="strand_id" id="strand_id" autocomplete="off" required style="width: 40%;">
								<option value="">SELECT STRAND</option>
								<?php
								$tablename = "strand";
								$result = get($tablename);

								foreach ($result as $key => $row) {
									$strand_name = $row["strand"]
									?>
 								<option value="<?= $row['strand_id'] ?>"><?= $row['strand'] ?></option>
									<?php
								}
								 ?>
								</select>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label">Section:</label>
							<div class="controls">
							<select name="section_id" id="section_id"  autocomplete="off" required style="width: 40%;" >
								<option value="">SELECT SECTION</option>
								</select>
							</div>
						</div>
						

						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Update changes</button>
							<a class="btn" href="user_manage.php">Cancel</a>
						</div>
						
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('#strand_id').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajax.php',
                data:'strand_id='+countryID,
                success:function(html){
                    $('#section_id').html(html);
                    //$('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#section_id').html('<option value="">Select country first</option>');
            //$('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>

<!-- close main content -->

<?php include "admin_footer.php"; ?>