<?php
	$uploaded_file_path = "img/" . basename($_FILES['post_img']['name']);
	$source_file = $_FILES['post_img']['tmp_name'];
	$upload = move_uploaded_file($source_file, $uploaded_file_path);

	$conn = mysqli_connect('localhost', 'root', '', 'ustumsuu');
	$query_text = "INSERT INTO news (date, type, title, image, text) VALUES ('{$_POST['post_date']}', {$_POST['post_type']}), {$_POST['post_title']}), '{$uploaded_file_path}', {$_POST['post_text']})'";
	$query = mysqli_query($conn, $query_text);

	header("Location: index.php");

?>