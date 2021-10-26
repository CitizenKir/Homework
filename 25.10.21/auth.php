<?php
session_start();
$_SESSION['login'] = $_POST['login'];
$_SESSION['password'] = $_POST['password'];
if(count($_POST)>0){
    $login = md5(trim($_POST['login']));
    $password = md5(trim($_POST['password']));
    if($login == ''|| $password == '')
    {
        echo 'Заполни данные';
    }
    elseif($password == '81dc9bdb52d04dc20036dbd8313ed055'& $login =='e7c0b37a667cc5a8b904fb25558c7448') {


        echo 'Вы успешно авторизовались'.'<br>';
        $subject = $_POST['login'];
        $message = $_POST['comment'];
        echo
        '<form method="post">
        <input type="text" name="comment"><br>
        <button type="submit">Отправить на почту</button>
        </form>';





    }
    else{
        echo 'Доступ к секретным данным закрыт';
    }
}
else{
    echo 'Введите данные';
}
$subject = $_POST['login'];
$message = $_POST['comment'];
if (count($_POST['comment'])>0){
    mail('caffeinated@example.com', $subject, $message);
    echo 'Письмо отправлено';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
<p>
    <input type="text" name="login" placeholder="Введите логин" <?php if($login == 'e7c0b37a667cc5a8b904fb25558c7448' & $password == '81dc9bdb52d04dc20036dbd8313ed055') {echo "style='display: none'";} ?>>
</p>
<p>
    <input type="text" name="password" placeholder="Введите пароль" <?php if($login == 'e7c0b37a667cc5a8b904fb25558c7448' & $password == '81dc9bdb52d04dc20036dbd8313ed055') {echo "style='display: none'";} ?>>
</p>
<p>
    <button type="submit"<?php if($login == 'e7c0b37a667cc5a8b904fb25558c7448' & $password == '81dc9bdb52d04dc20036dbd8313ed055') {echo "style='display: none'";} ?>> Отправить</button>
</p>
    <a href="fact.php">Fact</a>
    <a href="bitrix.php">Bitrix</a>
</form>


</body>
</html>
