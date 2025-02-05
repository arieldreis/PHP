<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, blue , lightblue);
            color: white;
        }
    </style>
</head>
<body>
    <h1>Estudando tipos primitivos em PHP</h1>
    <?php
    //0x = hexadecimal
    //0b = binário
    // 0 = octal
        // $num = 0x1A;
        // echo"O valor da variável é $num<br>";
        // var_dump($num);
        /*$v = 210;
        var_dump(is_int($v));
        $x = 34.12;
        var_dump(is_int($x));
        $nome = "Ariel Marinho";
        var_dump(is_string($nome));
        var_dump(is_numeric($nome));
        $num = (int)3e3; // 3 x 10(2) coerção
        echo"<br>O valor é igual á $num<br>";
        var_dump($num)*/


        // $vet = [6 ,"Ariel" , 5.2 , true];
        // var_dump($vet);

        class Pessoas{
            private string $nome;
        }
        $p = new Pessoas;
        var_dump($p);
    ?>
</body>
</html>