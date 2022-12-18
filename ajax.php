<?php
include('perfect_function.php');
$conn = getConnection();
if($_POST['strand_id']){
$id=$_POST['strand_id'];
if($id==0){
	echo "<option>SELECT OPTION</option>";
}else{

	$section = mysqli_query($conn,"SELECT * FROM section WHERE strand_id='$id'");
	while($row = mysqli_fetch_array($section)){
		echo '<option value="'.$row['section_id'].'">'.$row['section_name'].'</option>';
		}
	}
}
?>