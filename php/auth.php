<?php
    include_once './connect.php'; // Подключение файла connect.php

    if(isset($_GET['pas']) && isset($_GET['log'])) { // Проверка наличия параметров pas и log в GET запросе
        $login = $_GET['log']; // Присваивание значения параметра log переменной $login
        $password = $_GET['pas']; // Присваивание значения параметра pas переменной $password

        $check_user = "SELECT * FROM users WHERE login_user = '$login'"; // Формирование запроса для выборки пользователя из базы данных
        $result = mysqli_query($connect, $check_user); // Выполнение запроса и получение результата

        $info_user = mysqli_fetch_array($result); // Получение данных о пользователе в виде ассоциативного массива

        if (!empty($info_user)) { // Проверка наличия информации о пользователе в базе данных
            if($password == $info_user['password_user']){ // Сравнение введенного пароля с паролем пользователя
                echo 'Ура'; // Вывод сообщения "Ура", если пароль совпадает
            } else{
                echo 'Неправильный пароль'; // Вывод сообщения "Неправильный пароль", если пароль не совпадает
            }
        } else {
            echo 'Неправильный логин или пароль'; // Вывод сообщения "Неправильный логин или пароль", если пользователь не найден
        }
    }
?>