<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALARIO MINÍMO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET['salario'];
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <h1>INFORME SEU SALÁRIO</h1>
            <label for="sla">Salário(R$):</label><br>
            <input type="number" name="salario" value="<?$salario?>" step="0.01"><br>
            <small>Considerando o salário minímo de <strong>R$1.509,00</strong></small>
            <button type="submit">CALCULAR</button>
        </form>
    </main>
    <section id="resultado">
        <h2>RESULTADO</h2>
        <?php 
            if($salario === "" || is_nan($salario)){
                echo "<p>DIGITE UM VALOR CORRESPONDESNTE AO PROGRAMA.</p>";
            }
            else{
                $quant_salario = floor($salario / 1509);
                $resto = $salario - (($quant_salario * 1509));
                echo "Quem recebe um salário de R$$salario ganha aproximadamente $quant_salario salários mínimos + R$$resto";
            }
        ?>
    </section>
</body>
</html>