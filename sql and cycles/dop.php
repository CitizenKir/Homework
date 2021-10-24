<?php

echo '<p> 1 задача</p><br>';

$arr = range(1, 15);
shuffle($arr);
foreach ($arr as $key){
    if($key % 2==0){
        echo $key*10 .'<br>';
    }
    else{
        echo $key .'<br>';
    }
}

echo '<p> 2 задача</p><br>';

$arr = range(0, 10);
shuffle($arr);
foreach ($arr as $key){
    if($key<count($arr)/2){
    echo '<i>'.$key.'</i><br>';
    }
    else{
        echo '<strong>'.$key.'</strong><br>';
    }
}

echo '<p> 3 задача</p><br>';
// Это все можно было бы сделать одной функцией, но нужно через цикл, поэтому вот такой бред))
$arr = range(0, rand(10,25));
shuffle($arr);
$count = 0;
for($i = 0; $i < count($arr); $i++){
    $count++;
}
echo 'Количество элементов в массиве: '.$count;

echo '<p> 4 задача</p><br>';

$arr = range(0, 10);
shuffle($arr);
foreach ($arr as $key){
    echo $key.' ';
}
echo '<br>Элементы массива, которые больше предыдущего: <br>';
$previous_value = 0;
foreach ($arr as $key=>$value) {
    if($value > $previous_value){
        echo $value.' ';
    }
    $previous_value = $value;


}


echo '<p> 5 задача</p><br>';
$arr = range(-5, 5);
shuffle($arr);
foreach ($arr as $key) {
    echo $key.'<br>';
}
echo 'Массив с обратным значением <br>';
foreach ($arr as $key){
    if($key < 0){
echo abs($key).'<br>';
    }
    elseif ($key > 0){
        echo $key - $key*2 .'<br>';

    }
    elseif ($key == 0){
        echo 0 .'<br>';
    }
}
