<?php
	session_start();
	include 'connect.php';

	$login = $_POST['login'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	$query = "INSERT INTO `users` VALUES (NULL, '$login', '$password', 0)";

	$result = mysqli_query($link, $query);

	if ($result == 1) {
	    header('Location: auth.php');
	    //$_SESSION['userName'] = $login;
	} else {
	    if (substr(mysqli_error($link), 0,9)=="Duplicate"){
	        header('Location: registr.php?err=dup');
	        echo("Данный пользователь уже зарегистрирован");      
	    }
	}