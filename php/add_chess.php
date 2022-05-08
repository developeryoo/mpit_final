<?php
	$conn = mysqli_connect('localhost', 'root', '', 'ustumsuu');
	$query_text = "INSERT INTO chess (date, type, title, img, text) VALUES ('{$_POST['chess_date']}', '{$_POST['chess_type']}', '{$_POST['chess_title']}', '{$_POST['chess_image']}', '{$_POST['chess_text']}')";
	$query = mysqli_query($conn, $query_text);

	header("Location: /chess.php");
?>