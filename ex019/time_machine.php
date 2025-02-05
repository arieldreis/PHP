<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máquina do Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $atual = date("Y");
        $nascimento = $_GET['ano_nascimento'];
        $ano = $_GET['ano'];
    ?>
        <main>
            <h1>CALCULANDO SUA IDADE</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <label for="ano" id="label">EM QUE ANO VOCÊ NASCEU?</label><br>
                <input type="number" name="ano_nascimento" min="1700" value="<?$nascimento?>" required><br>
                <small>QUER SABER SUA IDADE EM QUE ANO?(atualmente estamos em 2025)</small><br>
                <input type="number" name="ano" value="<?$ano?>" required><br>
                <button type="submit">QUAL SERÁ A MINHA IDADE?</button>
            </form>
        </main>
        <section>
            <h2>RESULTADO</h2>
            <?php 
                if($ano < $nascimento){
                    echo "<p>[ERRO]:NÃO FOI POSSÍVEL SER FEITA OPERAÇÃO, POIS E A DATA DO SEU NASCIMENTO É MAIOR DO QUE O ANO ESTABELECIDO.</p>";
                }
                elseif($nascimento > $atual){
                    echo "O VALOR DEVE SER MENOR OU IGUAL A 2025";
                }
                else{
                    $idade = $ano - $nascimento;
                    echo "<p>QUEM NASCEU EM $nascimento vai ter $idade anos em $ano!</p>";
                }
            ?>
        </section>
    <?php ?>
</body>
</html>