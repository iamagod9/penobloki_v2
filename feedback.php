<?php
	include 'connect.php';

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = mysqli_real_escape_string($link, $_POST['message']);

	if (!empty($name) && !empty($phone) && !empty($email) && !empty($message)) {
		mysqli_query($link, "INSERT INTO `feedback` VALUES (NULL, '$name', '$phone', '$email', '$message')");
	} else {
		header('Location: contacts.php?err=error');
	}

	header('Location: contacts.php');
?>