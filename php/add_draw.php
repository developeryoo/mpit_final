<?php
	$conn = mysqli_connect('localhost', 'root', '', 'ustumsuu');
	$query_text = "INSERT INTO draw (date, type, title, img, text) VALUES ('{$_POST['draw_date']}', '{$_POST['draw_type']}', '{$_POST['draw_title']}', '{$_POST['draw_image']}', '{$_POST['draw_text']}')";
	$query = mysqli_query($conn, $query_text);

	header("Location: /draw.php");
?>