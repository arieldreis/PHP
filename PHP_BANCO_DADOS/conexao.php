<?php // CONEXÃO COM O BANCO DE DADOS.
    $hostname = "localhost";
    $bancodedados = "bookstore";
    $username = "root";
    $password = "";

    $conn = new mysqli($hostname, $username, $password, $bancodedados); // CRIANDO UM OBJETO
    if($conn->connect_errno){
        die("Falha na conexão: " . $conexao->connect_error);
    }else{
        echo"<h1>Conexão feita com sucesso.</h1>";
    }
?>