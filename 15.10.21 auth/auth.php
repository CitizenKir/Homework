<head>
    <meta charset="UTF-8">
    <title>Authorisation</title>
    <link rel="stylesheet" href="style/auth.css">

</head>
<?php
if (count($_POST) > 0) {
    $login = md5(trim($_POST['login']));
    $password = md5(trim($_POST['password']));
    if ($login != 'e7c0b37a667cc5a8b904fb25558c7448') {
        echo 'Введен неверный логин';
    } elseif ($password != '81dc9bdb52d04dc20036dbd8313ed055') {
        echo 'Введен неверный пароль';
    }
    if ($password == '81dc9bdb52d04dc20036dbd8313ed055' & $login == 'e7c0b37a667cc5a8b904fb25558c7448') {


        echo 'Здравствуйте! Введите ваш комментарий' . '<br>';
        $subject = $_POST['login'];
        $message = $_POST['comment'];
        echo
        '<form method="post" class="auth">
        <input type="text" name="comment"><br>
        <a href="index.php"><button type="submit">Отправить на почту</button></a>
        </form>';


    }
} else {
    echo 'Введите данные';
}
$subject = $_POST['login'];
$message = $_POST['comment'];
if (count($_POST['comment']) > 0) {
    mail('mail@example.com', $subject, $message);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="forma">
    <form method="post" class="auth">
        <p>
            <input type="text"
                   name="login"<?php if ($login == 'e7c0b37a667cc5a8b904fb25558c7448' & $password == '81dc9bdb52d04dc20036dbd8313ed055') {
                echo "style='display: none'";
            } ?>>
        </p>
        <p>
            <input type="text"
                   name="password"<?php if ($login == 'e7c0b37a667cc5a8b904fb25558c7448' & $password == '81dc9bdb52d04dc20036dbd8313ed055') {
                echo "style='display: none'";
            } ?>>
        </p>
        <p>
            <button type="submit"<?php if ($login == 'e7c0b37a667cc5a8b904fb25558c7448' & $password == '81dc9bdb52d04dc20036dbd8313ed055') {
                echo "style='display: none'";
            } ?>> Отправить
            </button>
        </p>

    </form>
</div>
</body>
</html>
