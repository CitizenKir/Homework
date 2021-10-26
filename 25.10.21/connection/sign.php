<?php
session_start();
require_once 'connect.php';
$login = $_POST['login'];
$password = $_POST['password'];
$passwordtwo = $_POST['passwordtwo'];

if($password === $passwordtwo){

    $password = md5($password);
mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '$login', '$password')");
$_SESSION['warning'] = 'Вы успешно зарегистрировались!';
    header('Location: ../auth2.0.php');
}
else{
    $_SESSION['warning'] = 'Пароли не совпадают';
    header('Location: ../reg.php');
}