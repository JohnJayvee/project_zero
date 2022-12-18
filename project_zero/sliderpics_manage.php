<?php include "admin_header.php"; ?>

<h1 class="page-header">Slider Pictures</h1>

<!-- main content -->

<div class="box-content">

	<?php $create_sliderpic_url = base_url()."sliderpics_create.php"; ?>
	<p>
		<a href="<?= $create_sliderpic_url ?>">
			<button type="button" class="btn btn-primary"> &nbsp; &nbsp; Add Slider Picture &nbsp; &nbsp;</button>
		</a>
	</p>


	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Slider Pictures</h2>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered">
				  <thead>
					  <tr>
						  <th> Picture</th>
						  <th> File Name</th>
						  <th class="span4">Actions</th>
					  </tr>
				  </thead>   
				  <tbody>
				  <?php 
				  		$table_name = "sliderpics";

				  		//get all records from users table
						$user_data = get($table_name);

						//fetch result set and pass it to an array (associative)
				  		foreach ($user_data as $key => $row) {
						$id = $row['id'];
						$alt = $row['alt'];
						$picture = $row['picture'];
						$picture_url = base_url().'slider_pics/'.$picture;
						$id = $row['id'];

				  		$delete_sliderpic_url = base_url().'sliderpics_deleteconf.php?id='.$id;
				  ?>
					<tr>
						<td class="center span4">
							<img src="<?= $picture_url ?>" style="height: 20%;" class="img-responsive">
						</td>
						<td class="center"><?= $picture ?></td>
						<td class="center">
							<a class="btn btn-danger" href="<?= $delete_sliderpic_url ?>">
								<i class="halflings-icon white trash"></i> delete 
							</a>
						</td>
					</tr>
					<?php } ?>
				  </tbody>
				</table> 
			</div>
		</div>
	</div>
</div>

<!-- close main content -->

<?php include "admin_footer.php"; ?>