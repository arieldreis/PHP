<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAIXA ELETRÔNICO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dinheiro = $_GET['caixa'];
        /*if($dinheiro < 20){
            echo "<span><h3>[ERRO]</h3>";
            echo "O VALOR SOLICITADO ESTÁ MUITO BAIXO, SAQUE MINÍMO É DE 20 REAIS.</span>";
        }
        elseif($dinheiro > 1000){
            echo "<span><h3>[ERRO]</h3>";
            echo "O VALOR SOLICITADO ESTÁ MUITO ALTO, SAQUE MAXÍMO  É DE 1000 REAIS.</span>";
        }*/

        $resto = $dinheiro;
        // SAQUE DE R$100 REAIS
        $tot100 = floor($resto / 100);
        $resto %= 100;
        // SAQUE DE R$50 REAIS
        $tot50 = floor($resto / 50);
        $resto%= 50;
        // SAQUE DE 20 REAIS
        $tot20 = floor($resto / 20);
        $resto %= 20;
        // SAQUE DE 10 REAIS
        $tot10 = floor($resto / 10);
        $resto %= 10;
        // SAQUE DE 5 REAIS
        $tot5 = floor($resto / 5);
        $resto %= 5;
        // SAQUE DE 2 REAIS
        $tot2 = floor($resto / 2);
        $resto %= 2;
        // SAQUE DE 1 REAL
        $tot1 = floor($resto / 1);
        $resto %= 1;
    ?>
    <main>
        <h1>CAIXA ELETRÔNICO</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor" id="label">QUAL VALOR VOCÊ DESEJA SACAR? (R$)*</label><br>
            <input type="number" name="caixa" id="caixa" value="<?$dinheiro?>" step="1" min="20" max="2000" required><br>
            <small>Notas disponíveis R$100, R$50, R$20, R$10, R$5, R$2, R$1</small><br>
            <button type="submit">SACAR</button>
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=$dinheiro?> reais</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas.
            <ul>
                <li><img src="img/100reais.jpg" alt="NOTA DE 100 REAIS" width="100" height="60"> x<?=$tot100?></li>
                <li><img src="img/50reais.jpg" alt="NOTA DE 50 REAIS" width="100" height="60"> x<?=$tot50?></li>
                <li><img src="img/20reais.jpg" alt="NOTA DE 20 REAIS" width="100" height="60"> x<?=$tot20?></li>
                <li><img src="img/10reais.jpg" alt="NOTA DE 10 REAIS" width="100" height="60"> x<?=$tot10?></li>
                <li><img src="img/5reais.jpg" alt="NOTA DE 5 REAIS" width="100" height="60"> x<?=$tot5?></li>
                <li><img src="img/2_back.jpg" alt="NOTA DE 2 REAIS" width="100" height="60"> x<?=$tot2?></li>
                <li><img src="img/1realjpg.jpg" alt="1 REAL" width="100" height="60"> x<?=$tot1?></li>
            </ul>
        </p>
    </section>
</body>
</html>