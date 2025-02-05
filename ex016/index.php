<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAIZ QUADRADA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $raiz = $_GET['raiz'];
    ?>
    <main>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <h1>INFORME SEU UM NÚMERO</h1>
            <label for="raiz">NÚMERO</label><br>
            <input type="number" name="raiz" value="<?$raiz?>" step="0.1" placeholder="DIGITE..."><br>
            <button type="submit">CALCULAR</button>
        </form>
    </main>
    <section id="resultado">
    <h2>RESULTADO</h2>
        <?php
            if($raiz === "" || is_nan($raiz)){
                echo "<p>DIGITE UM VALOR CORRESPONDESNTE AO PROGRAMA.</p>";
            }
            else{
                $raiz_quadrada = sqrt($raiz);
                $raiz_cubica = pow($raiz, 1 / 3);
                echo "<p>Analisando o <strong>número $raiz</strong> temos:</p>";
                echo "<ul><li>A sua raiz quadrada é $raiz_quadrada</li>";
                echo "<li>A sua raiz cúbica é $raiz_cubica</li></ul>";
            }
        ?>
    </section>
</body>
</html>