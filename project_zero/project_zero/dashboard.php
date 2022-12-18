<?php include "admin_header.php"; 
include "perfect_date.php";
?>
<h1>HELLO, <?= _get_firstname_from_id($_SESSION['id']) ?></h1>

<h3>REPORTS!</h3>

<h1 class="page-header">
REPORTS
	
</h1>



<?php
	$log_data = get("logs");
	foreach ($log_data as $key => $row) {
		$text = $row['text'];
		$datetime = get_nice_date($row['datetime'],"full");
			
?>

<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert">x</button>
<strong><?= $datetime ?></strong> <br>
<?= $text ?>
	

</div>
<?php
}
?>





<?php include "admin_footer.php"; ?>