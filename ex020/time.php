<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA DE TEMPO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $calculator_time = $_GET['time'];
    ?>
    <main>
        <h1>CALCULADORA DE TEMPO</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="time" id="label">Qual é o tempo em segundos?</label><br>
            <input type="number" name="time" value="<?echo $calculator_time?>" placeholder="DIGITE UM VALOR..." required><br>
            <button type="submit">CALCULAR</button>
        </form>
    </main>
    <section>
        <h2>TOTALIZANDO TUDO</h2>
        <?php 
/*
    1min = 60seg
    1 hora = 60min * 60 = 3600seg
    1 dia = 24h * 60 = 1440 * 60 = 84.400seg
    1 semana 7 dias * 24 = 168 * 60 = 10080 * 60 = 604.800seg
*/
            $time_formatado = number_format($calculator_time, 0,',', '.');

            $semanas = (int)($calculator_time / 604800);
            $semanas_formatado = number_format($semanas, 0,',', '.');

            $dias = (int)(($calculator_time % 604800) / 86400);
            $dias_formatado = number_format($dias, 0,',', '.');

            $hora = (int)(($calculator_time % 86400) / 3600);
            $hora_formatado = number_format($hora, 0,',', '.');

            $minuto = (int)(($calculator_time % 3600) / 60);
            $minuto_formatado = number_format($minuto, 0,',', '.');

            $segundo = ($calculator_time % 60);
            $segundo_formatado = number_format($segundo, 0,',', '.');

            if($calculator_time < 0){
                echo "<p>Não foi possível ser feita a conversão com números negativos.</p>";
            }
            else{
                echo "<p>Analisando o valor que você digitou, <strong>$time_formatado</strong><br>segundos equivalem a um total de:</p>";
                echo "<ul><li>$semanas_formatado semanas</li>";
                echo "<li>$dias_formatado dias</li>";
                echo "<li>$hora_formatado horas</li>";
                echo "<li>$minuto_formatado minutos</li>";
                echo "<li>$segundo segundos</li></ul>";
            }
        ?>
    </section>
</body>
</html>