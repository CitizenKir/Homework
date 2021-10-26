<?php
session_start();
$_SESSION['result1'] = $_POST['result1'];
?>
<!
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
    <label>2+2=</label>
    <input type="text" name="result1">
    <button type="submit">Отправить</button>
    <a href="task2.php">Следующий вопрос</a>
</form>
</body>
</html>
