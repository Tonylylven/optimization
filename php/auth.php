<?php
    include_once './connect.php';
    
    if(isset($_GET['pas'])) { 
        $password = $_GET['pas']; 
    }

    if(isset($_GET['log'])) { 
        $login = $_GET['log'];
        $check_user = "SELECT * FROM users WHERE login_user = '$login'";
        $result =  mysqli_query($connect, $check_user);
        while($info_user = mysqli_fetch_array($result))
        {
            if ($info_user['login_user'] = " "){
                echo 'Неправильный логин или пароль';
            } else{
                if($password == $info_user['password_user']){
                    echo 'Ура';
                } else{
                    echo 'Неправильный пароль';
                }
            }
        }
    }
?>