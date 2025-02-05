<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCÍCIO DE PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // CAPTURANDO OS DADOS DO FORMS RETROALIMENTADO.
        $valor1 = $_GET['v1'];
        $valor2 = $_GET['v2'];
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <h1>SOMA DE VALORES</h1>
            <label for="v1">VALOR 1:</label><br>
            <input type="number" name="v1" id="v1" placeholder="DIGITE..." value="<?$valor1?>" step="0.01"><br>
            <label for="v2">VALOR 2:</label><br>
            <input type="number" name="v2" id="v2" placeholder="DIGITE..." value="<?$valor2?>" step="0.01"><br>
            <button type="submit">ENVIAR</button>
        </form>
    </main>
    <section id="resultado">
        <h2>RESULTADO DA SOMA</h2>
        <?php 
            $soma = $valor1 + $valor2;
            if(is_nan($valor1) || is_nan($valor1))
            {
                echo "<p>PREENCHA O CAMPO PARA A REALIZAÇÃO DO CALCULO</p>";
            }
            else
            {
                echo "<p>O valor da soma é igual á $soma</p>";
            }
        ?>
    </section>
</body>
</html>