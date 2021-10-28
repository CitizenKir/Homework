<?php
session_start();
require_once 'regClass.php';
$user = new Registration($_POST['login'],$_POST['password'],$_POST['passwordtwo'],$_POST['firstName'], $_POST['lastName'],$_POST['age']);
$user->reg();

/*$login = $_POST['login'];
$password = $_POST['password'];
$passwordtwo = $_POST['passwordtwo'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];

if($password === $passwordtwo){

    $password = md5($password);
mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`,`firstName`,`lastName`,`age`) VALUES (NULL, '$login', '$password', '$firstName', '$lastName', '$age')");
$_SESSION['warning'] = 'Вы успешно зарегистрировались!';
    header('Location: ../auth2.0.php');
}
else{
    $_SESSION['warning'] = 'Пароли не совпадают';
    header('Location: ../reg.php');*/
