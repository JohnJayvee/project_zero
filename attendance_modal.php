<div class="modal hide fade" id="exampleModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>SHS Section</h3>
			</div>
			<div class="modal-body">
				<p>Please Select Section:</p>
				<form action="view_attendance_proc.php" method="POST">
					<select name=newsection>
						<?php $tablename = 'section';
                $section_data = get($tablename);
                foreach ($section_data as $key => $row) {
	                $section_id = $row['section_id'];
	                $section_name = $row['section_name'];
                ?>
						<option value="<?= $section_id ?>">
							<?= $section_name ?>
						</option>
						<?php
                }
                    ?>
					</select>
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
				<input type=submit value="Submit" class="btn btn-secondary"></input>
			</div>
			</form>
		</div>
	</div>
</div>