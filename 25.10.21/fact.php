<?php
session_start();
$_SESSION['page'] = 'fact.php';
echo 'This page of Fact';
?>
<br>
<a href="index.php">На главную</a>