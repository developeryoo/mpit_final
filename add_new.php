<?php
	$conn = mysqli_connect('localhost', 'root', '', 'ustumsuu');
	$query_text = "INSERT INTO news (date, type, title, img, text) VALUES ('{$_POST['post_date']}', '{$_POST['post_type']}', '{$_POST['post_title']}', '{$_POST['post_image']}', '{$_POST['post_text']}')";
	$query = mysqli_query($conn, $query_text);

	header("Location: index.php");
?>