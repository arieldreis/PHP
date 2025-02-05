<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCÍCIO DE PHP</title>
    <style>
        body{
            background: linear-gradient(150deg, green, lightgreen);
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            height: 95vh;
        }
        main{
            margin-top: 10%;
            color: black;
            padding: 20px;
            border-radius: 10px;
            background-color: white;
        }
    </style>
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                session_start();
                $_SESSION["teste"] = "funcionou";

                echo"<h1>SUPER GLOBAL GET</h1>";
                var_dump($_GET); // QUERY STRING

                echo"<h1>SUPERGLOBAL POST</h1>";
                var_dump($_POST);

                echo"<h1>SUPERGLOBAL REQUEST</h1>";
                var_dump($_REQUEST);

                echo"<h1>SUPERGLOBAL COOKIE</h1>";
                var_dump($_COOKIE);

                echo"<h1>SUPERGLOBAL SESSION</h1>";
                var_dump($_SESSION);

                echo"<h1>SUPERGLOBAL ENV</h1>";
                /*foreach(getenv() as $c => $v){
                    echo"<br>$c - $s";
                };*/

                echo"<h1>SUPERGLOBAL SERVER</h1>";
                //var_dump($_SERVER);

                echo"<h1>SUPERGLOBAL GLOBAL</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>