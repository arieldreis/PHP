<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de String</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, green , lightblue);
            color: white;
        }
    </style>
</head>
<body>
    <h1>Manipulação de String</h1>
    <?php 
        //Nas aspas duplas "" existe interpretação do conteúdo
        echo"PHP \u{1F418}";
        $nome = "Ariel";
        echo"<br>Olá $nome!✌️";
        echo'<br>Olá $nome!⚽'; // As aspas simples significa que o interpredor não irá interpretar o conteúdo e sim ele vaicolocar do jeito que está o código.
        const canal = "Curso em Vídeo";
        echo"<br>Seja bem-vindo ao meu canal do " . canal;
        echo"<br>Estamos no ano " . date('Y');
        $nom = "Rodrigo";
        $snom = "Nogueira";
        echo"<br>$nom  \"Minotauro \"  $snom"; //Sequência de Escape
        $curso = "PHP";
        $ano = date('Y');
        echo <<< teste
            <br>Olá galera do canal $curso
                Tudo bem com Vocês?
                Como está sendo esse ano de $ano?
            Abraços! \u{1F596}
        teste; //String Heredoc
    ?>
</body>
</html>