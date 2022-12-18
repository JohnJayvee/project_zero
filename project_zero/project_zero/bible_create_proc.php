<?php
session_start();
include "perfect_function.php";

$table_name = "bible_verses";

$book = $_POST['book'];
$chapter = $_POST['chapter'];
$verse = $_POST['verse'];
$text = $_POST['text'];

$bible_data = array(
	//columname from table => value from post
			"book" => $book, 
			"chapter" => $chapter, 
			"verse" => $verse,
			"text" => $text
);

header("Location: bible_manage.php");
$text = "User $username has successfully added a verse.";
		save_logs($text);
?>