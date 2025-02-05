<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Operadores Aritiméticos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background: linear-gradient(to top, blue, lightblue);
                font-family: Arial, Helvetica, sans-serif;
                color: white;
                background-repeat: no-repeat;
                background-position: center right;
                background-size: cover;
                background-attachment: fixed;
            }
        </style>
    </head>
    <body>
        <h1>Operadores Aritiméticos</h1>
        <?php 
            $resultado = 50 / 2 + 3**2;
            echo"O resultado de conta será de $resultado";
            $r = abs(500); #Valor absoluto
            echo"<br>O valor absoluto é $r"; 
            $bs = base_convert(254, 10,2);
            echo"<br>A resposta é $bs";
            $divisao = 31 / 4;
            echo"<br>O resultado é ";
            $valor1 = 4.3;
            echo"ceil($valor1) = ". ceil($valor1) . "<br>";
            $valor2 = 4.6;
            echo"floor($valor2) = " . floor($valor2) . "<br>";
            $valor3 = 1.6;
            echo"round($valor3) = ". round($valor3) . "<br>";
            $cateto1 = 5;
            $cateto2 = 8;
            echo"O valor máximo entre $cateto1 e $cateto2 será de " . max($cateto1 , $cateto2) . "<br>";
            echo"O valor mínimo entre $cateto1 e $cateto2 será de " . min($cateto1 , $cateto2) . "<br>";
            echo"hypot($cateto1 e $cateto2) = " . hypot($cateto1 , $cateto1) . "<br>";
            $num1 = 10;
            $num2 = 3;
            echo"A divisão entre $num1 e $num2 é igual á " . intdiv($num1 , $num2);
            $pi = M_PI;
            echo"<br>O valor de PI é igual á " . $pi;
            $potencia = pow(10,2);
            echo"<br>O resultado dessa potência é igual á " . $potencia;
            $raiz = sqrt(81);
            echo"<br>O valor dessa raiz quadrada é igual de " . $raiz;
            $soma = "2" + "2";
            echo"<br>O resultado é " . $soma;
        ?>
    </body>
</html>