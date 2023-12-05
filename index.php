<?php
include 'php/connect.php'
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>PHP</title>
</head>
<body>
    <header>
        <h1>PHP оптимизация</h1>
    </header>
    <main>
        <div class="container">
            <div class="form">
                <h2>Авторизация</h2>
                <form action="php/auth.php" method = "GET">
                    <label for="login">Логин:</label>
                    <input type="text" id="login" name="log">
                    <label for="password" >Пароль:</label>
                    <input type="password" id="password" name="pas">
                    <button type="submit">Вход</button>
                </form>
            </div>
            <div class="form">
                <h2>Регистрация</h2>
                <form action="php/register.php" method = "GET">
                    <label for="name">Имя:</label>
                    <input type="text" id="name" name="name_us">
                    <label for="surname">Фамилия:</label>
                    <input type="text" id="surname" name="surname_us">
                    <label for="email">Почта:</label>
                    <input type="email" id="email" name="email_us">
                    <label for="login">Логин:</label>
                    <input type="text" id="login" name="login_us">
                    <label for="pass">Пароль:</label>
                    <input type="password" id="password" name="pass_us">
                    <label for="confirmpass">Подтвердите пароль:</label>
                    <input type="password" id="confirmpass" name="confpass_us">
                    <button type="submit">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>