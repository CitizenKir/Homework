<?php
$hostname = 'localhost';
$user = 'Kirill';
$password = '6168';
$dbname = 'user';

$connect = mysqli_connect($hostname, $user, $password, $dbname);
mysqli_set_charset($connect, 'utf8');
