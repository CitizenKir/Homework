<?php
session_start();
$_SESSION['color'] = $_POST['color'];
if($_SESSION['color'] != ''){
    header('Location: index.php');
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Выберите цвет</label>
    <input type="color" name="color">
    <button type="submit">Выбрать</button>
</form>
</body>
</html>
