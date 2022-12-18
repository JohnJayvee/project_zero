<?php
	include "perfect_function.php";

	$table_name = 'bible_verses';

	//get user ID from URL
	$id = $_GET['id'];
	$book = $_POST['book'];
	$chapter = $_POST['chapter'];
	$verse = $_POST['verse'];
	$text = $_POST['text'];

	$bible_editedvalues = array (
		//columname from table => value from post
			"book" => $book, 
			"chapter" => $chapter, 
			"verse" => $verse,
			"text" => $text
	);

	$_SESSION['upd_msg'] = "Bible details were successfully updated.";
	update($bible_editedvalues, $id, $table_name);
	header("Location: bible_manage.php");
	$text = "User $username has successfully updated a verse.";
		save_logs($text);
?>