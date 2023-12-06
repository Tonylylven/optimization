<?php
    require_once './connect.php'; // Подключение файла connect.php

    $columns = array('name_us', 'surname_us', 'email_us', 'pass_us', 'confpass_us', 'login_us'); // Список столбцов

    $values = array(); // Создание пустого массива для значений

    // Проходимся по каждому столбцу и проверяем, есть ли значение в массиве $_GET
    foreach ($columns as $column) {
        if (isset($_GET[$column])) {
            $values[$column] = $_GET[$column]; // Если значение существует, добавляем его в массив $values
        }
    }

    // Проверяем, существуют ли значения для логина, пароля и подтверждения пароля
    if (isset($values['login_us'])) {
        $log = $values['login_us']; // Присваиваем значение логина
        $pass = $values['pass_us']; // Присваиваем значение пароля
        $confpass = $values['confpass_us']; // Присваиваем значение подтверждения пароля

        // Проверяем, совпадают ли пароль и подтверждение пароля
        if ($pass === $confpass) {
            $reg_user = "INSERT INTO users (id_user, login_user, password_user, email_user, name_user, surname_user) VALUES ('NULL', '$log', '$pass', '$email', '$name', '$surname')"; // Создаем строку запроса для регистрации пользователя
            $result_reg = mysqli_query($connect, $reg_user); // Выполняем запрос на регистрацию пользователя
            echo 'Access!'; // Выводим сообщение "Доступ разрешен"
        }
    }
?>