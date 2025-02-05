<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavéis</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Usando Variavéis em PHP</h1>
    <?php 
        $nome = 'Ariel'; //variável
        $sobrenome = 'Marinho'; //variável
        const pais = "BRASIL";
        echo "Muito prazer em conhecer, $nome $sobrenome você mora no " , pais; //Resultado das variaveis
        $_nome1_ = "GUSTAVO";
        echo "<br><mark>É verdade que o seu nome é $_nome1_</mark>";
        $salario = 2500.55;
        echo "<br>O seu salário é de R$ $salario";
        const _tx = 850;
        echo "<br>Resultado " . _tx;
        $valor = 200;
        echo "<br>O valor é igual á $valor no programa " . _tx;
        const sub = 400 - 200;
        echo "<br>A subtração é igual á " . sub;
    ?>
</body>
</html>