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
    <title>Регистрация</title>
</head>
<body>
<div class="container">
    <form action="connection/sign.php" method="post" class="authform">
        <legend style="font-size: 30px">Регистрация</legend>
        <input type="text" name="login" placeholder="Введите логин">
        <input type="password" name="password" placeholder="Введите пароль">
        <input type="password" name="passwordtwo" placeholder="Введите пароль повторно">
        <input type="text" name="firstName" placeholder="Введите ваше имя">
        <input type="text" name="lastName" placeholder="Введите вашу фамилию">
        <input type="text" name="age" placeholder="Введите ваш возраст">
        <button type="submit">Зарегистрироваться</button>
        <p><a href="auth2.0.php">Авторизация</a></p>
        <p class="warn">
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