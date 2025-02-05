<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MÉDIA ARITIMÉTICA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $media1 = $_GET['mediaone'];
        $peso1 = $_GET['pesoone'];
        $media2 = $_GET['mediathree'];
        $peso2 = $_GET['pesotwo'];
        ?>
    <main>
        <h1>MÉDIAS ARITIMÉTICAS</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1" class="label">1°Valor:</label><br>
            <input type="number" name="mediaone" placeholder="DIGITE..." value="<?$mediaone?>" step="0.01"><br>
            <label for="v2" class="label">1°Peso:</label><br>
            <input type="number" name="pesoone" placeholder="DIGITE..." value="<?$pesoone?>" step="0.01"><br>
            <label for="v3" class="label">2°Valor:</label><br>
            <input type="number" name="mediathree" placeholder="DIGITE..." value="<?$mediatwo?>" step="0.01"><br>
            <label for="v4" class="label">2°Peso:</label><br>
            <input type="number" name="pesotwo" placeholder="DIGITE..." value="<?$pesotwo?>" step="0.01"><br>
            <button type="submit">CALCULAR MÉDIAS</button>
        </form>
    </main>
    <section>
        <h2>CALCULO DAS MÉDIAS</h2>
        <?php 
            if($media1 === "" || $peso1 === "" || $media2 === "" || $peso2 === ""){
                echo "<p>PREENCHA O FOMULÁRIO COM UM VALOR VALIDO.</p>";
            }
            else{
                $mediaSimples = number_format(($media1 + $media2) / 2);
                $mediaPoderada = ($media1*$peso1 + $media2*$peso2) / ($peso1 + $peso2);
                echo "<p>ANALISANDO OS VALORES $media1 E $media2:</p>";
                echo "<ul><li>A média Aritimética entre os valores é igual $mediaSimples</li>";
                echo "<li>A média Aritimética Ponderada com pesos $peso1 e $peso2 é igual á $mediaPoderada</li></ul>";
            }
        ?>
    </section>
</body>
</html>