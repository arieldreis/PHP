<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            include("conexao.php"); // Inclui a conexão com o banco.
            // Verifica se os formulários forma enviadfos via POST
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                // Pega os dados do formulário
                $idlivro = $_POST['idlivro'];
                $nomeLivro = $_POST['nomelivro'];
                $Quant = $_POST['quantLivro'];
                $precoLivro = $_POST['precoLivro'];
                //Prepara a consultra sql para inserir no banco
                $sql = "INSERT INTO produtos (id, nome, quantidade, valor) values (?, ?, ?, ?)";
                // Prepara o statment(declaração)
                if($stmt = $conn->prepare($sql)){
                    //Bind dos parametros
                    $stmt->bind_param("isid", $idlivro, $nomeLivro, $Quant, $precoLivro);
                    //Executa a função
                    if($stmt->execute()){
                        echo"<p>PRODUTO CADASTRADO COM SUCESSO!</p>";
                    }else{
                        echo"ERRO AO CADASTRAR O PRODUTO: ". $stmt->error;
                    }
                    // Fecha o statement
                    $stmt->close();
                }else{
                    echo "Erro ao preparar a consulta: " . $conn->error;
                }
            }
            //Fecha a conexão
            $conn->close();
    ?>
    </main>
</body>
</html>