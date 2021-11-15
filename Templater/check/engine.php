<?php session_start();
$_SESSION['bonus'] = $_POST['bonus'];
$_SESSION['tips'] = $_POST['tips'];
$_SESSION['adress'] = $_POST['adress'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/style.css">
    <title>CheckTemplate</title>
</head>
<body>
<div class="main">
    <legend class="name">CheckTemplate</legend>
    <form method="post">
        <p>Добавить информацию о бонусных баллах <input type="checkbox" class="custom-checkbox" name="bonus"></p>
        <p>Добавить электронные чаевые<input type="checkbox" name="tips"></p>
        <p>Добавить адрес гостя<input type="checkbox" name="adress"></p>
        <button class="but" type="submit">Добавить</button>
        <a href="/defaultTemplates/check.php"> <div class="but">
                Перейти к шаблону
            </div></a>
    </form>
    <a href="/check/destroy.php"> <div class="but">
            Очистить шаблон
        </div></a>
</div>