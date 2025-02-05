<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIVISÃO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'];
        $divisor = $_GET['divisor'];
    ?>
    <main>
    <h1>ANATOMIA DE UMA DIVISÃO</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">DIVIDENDO:</label><br>
            <input type="number" name="dividendo" value="<?$dividendo?>"><br>
            <label for="divisor">DIVISOR:</label><br>
            <input type="number" name="divisor" value="<?$divisor?>"><br>
            <button type="submit">ANALISAR</button>
        </form>
    </main>
    <section>
        <h2>ESTRUTURA DA DIVISÃO</h2>
        <?php 
            if($dividendo <= 0 || $divisor <= 0){
                echo "<p>ERRO AO REALIZAR O CALCULO, NÚMERO NEGATIVOS<br>E O NÚMERO ZERO NÃO SAÃO ACEITOS</p>";
            }
            else{
                $divisao = $dividendo / $divisor;
                $resto = $dividendo % $divisor;
                echo"ESTRUTURA DA DIVISÃO";
                echo"<table><tr><td>$dividendo</td><td>$divisor</td></tr>";
                echo"<tr><td>$resto</td><td>$divisao</td></tr></table>";
            }
        ?>
    </section>
</body>
</html>