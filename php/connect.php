<?php 
$connect = mysqli_connect('localhost', 'root', '', 'optimisation'); //Подключение к БД

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error(); //Вывод ошибок
    exit();
}