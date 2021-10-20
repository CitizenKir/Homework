<?php
session_start();
$_SESSION['page'] = 'bitrix.php';
echo 'This page of Bitrix';
?>
<br>
<a href="index.php">На главную</a>