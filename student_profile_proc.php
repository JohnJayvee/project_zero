<?php
session_start();
$_SESSION['stud_id'] = $_GET['id'];

header("Location: student_profile.php?id=" . $_SESSION['stud_id']);

?>