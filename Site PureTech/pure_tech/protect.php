<?php
    //Verificação da Sessão
    if (!isset($_SESSION)) {
        session_start();
    }
    //Autenticação do Utilizador
    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php");
    exit;
    }

?>