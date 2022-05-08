<?php
	$conn = mysqli_connect('localhost', 'root', '', 'ustumsuu');
	$query_text = "INSERT INTO music (date, type, title, img, text) VALUES ('{$_POST['music_date']}', '{$_POST['music_type']}', '{$_POST['music_title']}', '{$_POST['music_image']}', '{$_POST['music_text']}')";
	$query = mysqli_query($conn, $query_text);

	header("Location: /music.php");
?>