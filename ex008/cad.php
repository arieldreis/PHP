<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header>
            <h1><strong>Resultado Final</strong></h1>
        </header>
        <?php 
            $number = $_GET["numero"] ?? "Digite um Número válido!";
            $sucessor = $number + 1;
            $antecessor = $number - 1;
            echo"<p>O número escolhido foi <strong>$number</strong></p>";
            echo"<p>O seu sucessor é $sucessor</p>";
            echo"<p>O seu antecessor é $antecessor</p>";
        ?>
         <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </main>
</body>
</html>