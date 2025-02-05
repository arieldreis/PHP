<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatório</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>TRABALHANDO COM NÚMEROS ALEATÓRIOS</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            $aleatorio = mt_rand(1,100);
            echo "O valor Gerado foi $aleatorio<br>";
        ?>
        <button onclick="javascript:document.location.reload()">🔄 Gerar Outro</button>
    </main>
</body>
</html>