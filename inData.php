<?php session_start();

require_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

//$link = mysqli_connect('localhost','root','root','penoblocks');
$query = "SELECT * FROM `users` WHERE login = '$login'";

$result = mysqli_query($link, $query);

for($data = [];$row = mysqli_fetch_assoc($result);$data = $row);


if (!empty($data)){
    if (password_verify($password,$data['password'])){ 
        $_SESSION['login'] = $login;

        if ($data['is_admin'] == 1) {
            $_SESSION['isAdmin'] = 1;
            header('Location: admin.php');
        } else {
            header('Location: index.php');
        }
    }
    else{
        header('Location: auth.php?err=pas'); 
        echo("Введен неправильный пароль");
    }
}
else{
    header('Location: auth.php?err=log');
    echo("Данный пользователь не найден");      
}