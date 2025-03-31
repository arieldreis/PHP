
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span{
            color: white;
            font-size: 2px;
        }
    </style>
</head>
<body>
    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $bancodedados = "disneyconta";
        $conexao = new mysqli($hostname, $username, $password, $bancodedados); 
        if($conexao->connect_errno){
            die("Falha na conexão: " . $conexao->connect_error);
        }else{
            $conexao->set_charset("utf8");
            echo"<span>CONEXÃO FEITA COM SUCESSO COM O BANCO DE DADOS</span>";
        }
    ?>
</body>
</html>