
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/headerstyle.css">
    <link rel="stylesheet" href="../style/styles.css">
    <title>Array</title>
</head>
<body>
<?php
include '../header/header.html';
//5 задание
echo '<strong><p>Задание 5</p></strong>';
$arr = array(
    'Ivanovs' => array('Ivan', 'Kate', 'Tom'),
    'Petrovs' => array('Bob', 'Ann', 'Tanya'),
    'Smith' => array('Kate', 'Same'),
);
$all = 0;
foreach ($arr as $a) {
    foreach ($a as $value) {
        if ($value = true) {
            $all++;
        }
    }
}
echo 'Всего членов семьи: ' . $all;
echo '<strong><p>Задание 1</p></strong>';
//1 задание
$arr2 = range(1, 10);
shuffle($arr2);
foreach ($arr2 as $key) {
    if ($key % 2 == 0) {
        echo '<pre>' . '<strong>' . $key . '</strong>' . '</pre>';
    } else {
        echo '<pre>' . $key . '</pre>';
    }
}
echo '<strong><p>Задание 2</p></strong>';
//2 задание
$arr3 = array(
    'Ivanovs' => array('Ivan', 'Kate', 'Alaina'),
    'Petrovs' => array('Bob', 'Ann', 'Tanya'),
    'Smith' => array('Kate', 'Artur', 'Arina'),
);
echo 'Члены семьи с буквой "А" в начале имени: ';
foreach ($arr3 as $c) {
    foreach ($c as $i) {
        switch (substr($i, 0, 1)) {
            case 'A':
                echo $i . ' ';
        }
    }

}
echo '<strong><p>Задание 3</p></strong>';
//3 задание
$arr5 = array(
    '45' => array('42', '33', '21'),
    '13'=>array('41', '41'),
);
$sum = 0;

foreach ($arr5 as $main=>$meow){
    echo '<pre>'.'Измерение имеет: '.count($meow).' элемента'.'</pre>';
    $sum++;
}
foreach ($arr5 as $up){
    foreach ($up as $down){
        if($down = true){
            $sum++;
        }
    }
}
echo 'Всего элементов в массиве: '.$sum;
?>
</body>
</html>
