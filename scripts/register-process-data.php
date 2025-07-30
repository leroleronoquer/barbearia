<?php
require_once  '../config-php/config.php';
include '../scripts/login-process-data.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$dateNow = date('Y-m-d'); 




    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_row();
    $count = $row[0];
    if($count > 0){
   
        echo 'error';
        echo $count;
  
}
else{

    $stmt = $conn->prepare("INSERT INTO users (name, email, password, dateNow) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $password, $dateNow);
    if($stmt->execute()){

    header('Location: ../sections/section-homepage.php');

    exit();
    } 
    else {
    echo "Erro ao cadastrar usuário: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

 
}





?>