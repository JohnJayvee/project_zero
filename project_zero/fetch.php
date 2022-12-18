<?php 
include 'perfect_function.php';

$query = "SELECT * FROM students";

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

if ($total_row > 0) {
	foreach ($result as $row) {
		$output .= '
		<tr>
		<td>'.$row["strand"]'</td>
		<td>'.$row["section"]'</td>
		</tr>
		'
	}
}
else {
	$output .= '
		<tr>
		<td colspan=5 align="center">No data found.</td>
		</tr>
		'
}
?>