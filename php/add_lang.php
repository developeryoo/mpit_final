<?php
	$conn = mysqli_connect('localhost', 'root', '', 'ustumsuu');
	$query_text = "INSERT INTO lang (date, type, title, img, text) VALUES ('{$_POST['lang_date']}', '{$_POST['lang_type']}', '{$_POST['lang_title']}', '{$_POST['lang_image']}', '{$_POST['lang_text']}')";
	$query = mysqli_query($conn, $query_text);

	header("Location: /lang.php");
?>