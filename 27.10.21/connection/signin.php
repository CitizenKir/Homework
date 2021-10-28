<?php
session_start();
require_once 'authClass.php';
$user = new Auth($_POST['login'], $_POST['password']);
$login = $user->connect();

