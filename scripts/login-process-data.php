<?php
require_once  '../config-php/config.php';

if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == 0){
        echo "Preencha seu e-mail";
    }
    else if(strlen($_POST['password']) == 0){
        echo "Preencha sua senha";
    }
    else{

        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);

        $stmt = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $sql_query = $conn->query($stmt) or die("falha na execução");
   

        $result = $sql_query->num_rows;
        if($result == 1){
                $user = $sql_query->fetch_assoc();
                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['id'] = $user['id'];
               $_SESSION['name']  = $user['name'];
                $_SESSION['email'] = $user['email'];

                header("Location: ../sections/section-homepage.php");
        } else{
            $error = "falha ao logar! email ou senha incorretos";
            header("Location: ../login/login.php");
        }
   
    }
}
?>