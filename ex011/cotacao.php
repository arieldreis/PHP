<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header>
            <h1>Conversor de Moedas</h1>
        </header>
        <?php 
        //Cotação fixa vinda da API do BANCO CENTRAL
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%2711-30-2024%27&@dataFinalCotacao=%2712-07-2024%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            echo"Considerando que a cotação atual é de R$$cotacao";

            $real = $_GET["real"]; //Quantos Reais você tem

            if($real < 0 or $real === 0){
                //Caso o usuário digite um número negativo será mostrada essa mensagem.
                echo"<p>O valor digitado não corresponde ao programa, digite um valor válido para a execução<br>do programa.</p>";
            }else{
                //Caso o usuário digite o valor certinho irá aprecer esses dados.
                $conversao = $real / $cotacao; //Conversão de Real para dolár
                $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
                echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . 
                     " equivalem a <strong>" . numfmt_format_currency($padrao, $conversao, "USD") . 
                     "</strong></p>";
            }
        ?>
        <button class="button" onclick="redirecionar('index.html')">🔙 VOLTAR</button>
    </main>
    <script>
        function redirecionar(arquivo){
            window.location.href = arquivo;
        }
    </script>
</body>
</html>