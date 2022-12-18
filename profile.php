<?php include "admin_header.php"; ?>
<h1>HELLO, <?= _get_firstname_from_id($_SESSION['id']) ?>
</h1>

<?php 
$table_name = "users";
   $username = ""
				  		//get all records from users table
						$user_data = get_profile($table_name, $username
  
						//fetch result set and pass it to an array (associative)
				  		foreach ($user_data as $key => $row) {
						$fname = $row['firstname'];
						$lname = $row['lastname'];
						$username = $row['username'];
						$acct_type = $row['acct_type'];
						$photo = $row['photo'];
						$photo_url = base_url().'user_pics/'.$photo;
						$status = $row['status'];
						$id = $row['id'];

				  		$edit_user_url = base_url().'profile_edit.php?id='.$id;

?>
<div class="box-content">

	<form class="form-horizontal" method="post" action="<?= $form_location ?>">
		<fieldset>
			<div class="control-group">
				<label class="control-label">Username:</label>
				<div class="controls">
					<input type="text" class="span4" name="username" value="<?= $username ?>" required>
				</div>
			</div>

			<!-- password (should be hidden) -->
			<input type="hidden" class="span4" name="password" value="<?= $username ?>" required>

			<div class="control-group">
				<label class="control-label">First Name:</label>
				<div class="controls">
					<input type="text" class="span4" name="firstname" value="<?= $firstname ?>" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Last Name:</label>
				<div class="controls">
					<input type="text" class="span4" name="lastname" value="<?= $lastname ?>" required>
				</div>
			</div>
			<div class="control-group">
				<div class="form-actions">
					<button type="submit" class="btn btn-primary" name="submit" value="Submit">Update changes</button>
					<a class="btn" href="user_manage.php">Cancel</a>
				</div>
			</div>


		</fieldset>
	</form>
</div>
<?php include "admin_footer.php"; ?>