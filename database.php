<?php
$adress = 'localhost';
$db = 'firstblog';
$user_name = 'root';
$pass = '';
$charset = 'utf8';

$dsn="mysql:host=$adress;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,//исключение с инфо об ошибке
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,//извлечение данных из бд в виде ассоц. массива
    
];
$my_db = new PDO($dsn,$user_name,$pass,$opt);//создание нового экземпляра класса PDO
session_start();

?>