<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REAJUSTE DE PREÇO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $prod_preco = $_GET['preco'];
        $percentual = $_GET['input'];
    ?>
    <main>
        <h1>REAJUSTE DE PREÇO</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="prod" id="label1">Preço do Produto (R$)</label><br>
            <input type="number" name="preco" value="<?$prod_preco?>" step="0.01"><br>
            <label for="percentual" id="label">Qual será o percentual de reajuste? <strong>(<span id="resultado">0</span>%)</strong></label><br>
            <input type="range" name="input" id="input" oninput="reajuste()" min="1" max="100" value="<??>"><br>
            <button type="submit">REAJUSTAR</button>
        </form>
    </main>
    <section>
        <h2>RESULTADO DO REAJUSTE</h2>
        <?php
        $formatacao_produto = number_format($prod_preco, 2, ',' , '.');
        $aumento = $prod_preco + ($prod_preco*($percentual / 100));
        $formataco = number_format($aumento, 2, ',', '.');
        if($prod_preco < 0){
            echo "<p>O número solicitado é negativo, digite um positivo para o calulo ser feito.</p>";
        }
        else{
            echo "<p>O Produto que custava R$$formatacao_produto, com $percentual% de aumento vai passar a custa<br>";
            echo"a custar R$$formataco a partir de agora.</p>";
        }
    ?>
    </section>
    <script>
        const valuee = document.getElementById('input');
        const range = document.getElementById('resultado');
        function reajuste(){
          range.innerHTML = valuee.value;
        }
    </script>
</body>
</html>