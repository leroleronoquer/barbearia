<?php
session_start(); // Começa a sessão
    session_destroy(); // Destrói a sessão
    header("Location: ../login/login.php"); // Redireciona para a página de login
    exit();
    ?>