<?php include "perfect_function.php";
$sectionname = $_POST['sectionname'];
$bilang = counting_rows($sectionname);

if ($bilang < 1) {

    get_tables('attendance_records', 'studid', 'studid', 'students', $sectionname);

    header("Location: attendance_chec.php");

} else {

    header("Location: attendance_chec.php");
}

?>