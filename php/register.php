<?php
    include_once './connect.php';
    
    if(isset($_GET['name_us'])) { 
        $name = $_GET['name_us']; 
    }

    if(isset($_GET['surname_us'])) { 
        $surname = $_GET['surname_us']; 
    }

    if(isset($_GET['email_us'])) { 
        $email = $_GET['email_us']; 
    }

    if(isset($_GET['pass_us'])) { 
        $pass = $_GET['pass_us']; 
    }

    if(isset($_GET['confpass_us'])) { 
        $confpass = $_GET['confpass_us']; 
    }

    if(isset($_GET['login_us'])) { 
        $log = $_GET['login_us'];
        $reg_user = "INSERT INTO users (id_user, login_user, password_user, email_user, name_user, surname_user) VALUES ('NULL', '$log', '$pass', '$email', '$name', '$surname')";
        if ($pass = $confpass){
            $result_reg = mysqli_query($connect, $reg_user);
            echo 'Access!';
        }    
    }
?>