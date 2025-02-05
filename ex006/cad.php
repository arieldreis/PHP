<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <header>
        <h1>Processamento dos Dados</h1>
    </header>
    <main>
        <?php
            /*var_dump($_REQUEST);  Junção de $_GET $_POST $_COOKIES*/
            $nome = $_GET["nome"] ?? "Sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
            echo"<p>É um prazer de conhecer você senhor(a) <strong>$nome $sobrenome</strong>, este é o meu formulário usando PHP.</p>";
        ?>
        <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
    </main>
</body>
</html>