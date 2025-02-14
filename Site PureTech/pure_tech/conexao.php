<?php
    //Conexão com a base de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "pure_tech";

    //Criação do Objeto de Conexão
    $mysqli = new mysqli($servername, $username, $password, $db);

    //Tratar erros de conexão
    if($mysqli->error) {
        die("Falha ao conectar à base de dados: " . $mysqli->error);
    }
?>

