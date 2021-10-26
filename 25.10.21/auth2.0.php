<?php
session_start()
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/auth2.0.css">
    <title>Авторизация</title>
</head>
<body>
<div class="container">
<form action="connection/signin.php" method="post" class="authform">
    <legend style="font-size: 30px">Авторизация</legend>
    <input type="text" name="login" placeholder="Введите логин">
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit">Войти</button>
    <p><a href="reg.php">Регистрация</a></p>
    <p>
        <?
        if($_SESSION['warning']){
            echo $_SESSION['warning'];
        }
        unset($_SESSION['warning'])
        ?>
    </p>

</div>
</form>
</body>
</html>