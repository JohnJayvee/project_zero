<?php
session_start();
$_SESSION['section_id'] = $_GET['id'];

header("Location: section_edit.php?id=" . $_SESSION['section_id']);

?>