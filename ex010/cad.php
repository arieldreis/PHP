<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header>
            <h1>Conversor de Moedas</h1>
        </header>
        <?php 
            $real = $_GET["real"];
            $coversao = $real / 6.09;
            if($real < 0){
                echo"<p>O valor digitado é negativo, digiteum valor positivo para a execução<br>do programa.</p>";
            }else{
                echo"<p>Seus R$$real equivalem a US$" . number_format($coversao , 2) . "</p><br>";
            }
        ?>
        <button class="button" onclick="redirecionar('index.html')">🔙 VOLTAR</button>
    </main>
    <script>
        function redirecionar(arquivo){
            window.location.href = arquivo;
        }
    </script>
</body>
</html>