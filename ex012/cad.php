<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Números Reais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header>
            <h1>Analisador de Número Real</h1>
        </header>
        <?php 
            $numero = $_GET["number"];
            $inteiro = (int)$numero;
            $decimal = $numero - $inteiro;
            if($numero == 0 or $numero === 0){
                echo"Dados inválidos, volte ao programa e digite os novamente.";
            }
            else{
                echo"Analisando o número $numero informado pelo usuário:";
                echo"<ul><li>A parte inteira do número é $inteiro</li></ul>";
                echo"<ul><li>A parte fracionária do número será de $decimal</li></ul>";
            }
        ?>
        <button class="button" onclick="voltar('index.html')">CLIQUE</button>
    </main>
    <script>
        function voltar(arquivo){
            window.location.href = arquivo;
        }
    </script>
</body>
</html>