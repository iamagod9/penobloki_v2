<?php
	include 'connect.php';

	$removeId = $_GET['remove'];

	if (!empty($removeId)) {
		mysqli_query($link, "DELETE FROM `feedback` WHERE `id`=" . $removeId);
	}

	header('Location: admin.php');
?>