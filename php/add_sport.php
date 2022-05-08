<?php
	$conn = mysqli_connect('localhost', 'root', '', 'ustumsuu');
	$query_text = "INSERT INTO sport (date, type, title, img, text) VALUES ('{$_POST['sport_date']}', '{$_POST['sport_type']}', '{$_POST['sport_title']}', '{$_POST['sport_image']}', '{$_POST['sport_text']}')";
	$query = mysqli_query($conn, $query_text);

	header("Location: /sport.php");
?>