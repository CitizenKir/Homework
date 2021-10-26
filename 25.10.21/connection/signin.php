<?php
session_start();
require_once 'connect.php';
$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$_SESSION['login'] = $_POST['login'];
if(mysqli_num_rows($check_user) > 0){
   header('Location: ../index.php');
}
else{
    $_SESSION['warning'] = 'Не верный логин или пароль';
    header('Location: ../auth2.0.php');
}