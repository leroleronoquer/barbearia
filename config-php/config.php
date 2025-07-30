<?php
$serverDb = 'localhost';
$userDb = 'root';
$passwordDb = '';
$Db = 'barbearia-ds-pji';


$conn = new mysqli($serverDb, $userDb, $passwordDb, $Db);


if($conn->connect_error){
    die("Falha ao se comunicar com banco de dados: " . $conn->connect_error);
}
?>