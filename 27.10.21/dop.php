<?php
$hostname = 'localhost';
$user = 'Kirill';
$password = '6168';
$dbname = 'city';

$db_connect = mysqli_connect($hostname, $user, $password, $dbname);
mysqli_set_charset($db_connect, 'utf8');
//$insert = mysqli_query($db_connect,"INSERT INTO `name`(`ID_person`, `name`, `age`) VALUES (NULL,'Ann','18')");
$select = mysqli_query($db_connect, "SELECT * FROM `name`");
$arr_select = mysqli_fetch_all($select, MYSQLI_ASSOC);
echo '<pre>';
//print_r($arr_select);
echo '</pre>';
foreach ($arr_select as $name=>$key){
    print_r($key['name'].'<br>');


}

