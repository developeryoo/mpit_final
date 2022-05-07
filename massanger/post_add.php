<?php
	$conn = mysqli_connect('localhost', 'root', '', 'ustumsuu');
	$query_text = "INSERT INTO posts (text) VALUES ('{$_POST['post_text']}')";
	$query = mysqli_query($conn, $query_text);

	header("Location: index.php");
?>