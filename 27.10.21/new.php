<?php
/*$str = fopen('123.txt', 'r');
$str2 = fread($str, 1);
while ($str2 != null) {
    if ($str2 == 'l') {
        echo strtoupper($str2). '<br>';
    }
    elseif ($str2 == ' ') {
    echo str_replace(' ', '', $str2);
    }
    else {
        echo $str2 . '<br>';
    }
    $str2 = fread($str, 1);

}*/
if(!empty($_FILES)){
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
    move_uploaded_file($_FILES['file']['tmp_name'], 'img/'.'fact.png');

}
else{
    echo 'empty';
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
<form method="post" action="" enctype="multipart/form-data">
    <label>Введите имя</label>
    <input type="text" name="name">
    <input type="file" name="file">
    <button type="submit">go</button>

</form>
</body>
</html>
