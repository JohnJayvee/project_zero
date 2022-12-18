<?php
include "perfect_function";
insert_attendance('attendance_records', 'date', 'attendance_status', date(), '0');
header("Location: attendance_chec.php");
?>