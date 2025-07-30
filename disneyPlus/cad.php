<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISNEY+ Validando os Dados</title>
    <link rel="shortcut icon" href="css/disney-1.png" type="image/x-icon">
    <link rel="stylesheet" href="css/cad.css">
</head>
<body>
    <header>
        <h1>Disney+</h1>
    </header>
    <main>
        <!-- <h2>As informações aparecem logo abaixo, aguarde...</h2> -->
        <?php
            include("conexao.php");
            if($_SERVER["REQUEST_METHOD"] == "POST"){ // Verifica se o servidor está no metódo post
                // $ID = $_POST['identificador'];
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['password'];
                $nascimento = $_POST['nascimento'];
                $nomeuser = $_POST['nomeusuario'];
                $telefone = $_POST['telefone'];
                $mysql = "INSERT INTO tabela_disney (nome, email, senha, nascimento, nomeuser, telefone) VALUES (?, ?, ?, ?, ?, ?)"; // Inseri dados na sua tabela
                $senha_cripto = password_hash($senha, PASSWORD_DEFAULT); // Deixa a sua senha criptografada.
                if($stm = $conexao->prepare($mysql)){
                    $stm->bind_param("ssssss", $nome, $email, $senha_cripto, $nascimento, $nomeuser, $telefone);  // Confere os statement
                    if($stm->execute()){
                        echo"<h2>REGISTRO FEITO COM SUCESSO.</h2>";
                        echo"<p>Para conferir se sua conta foi criada, volta de na página de login e faça o que se pede.</p>";
                    }else{
                        echo"<h2>ERRO AO FAZER SEU CADASTRO!</h2>";
                        echo"<p>Confira se você fez tudo o que se pede, caso ao contrário entre em contato.</p>";
                    }
                    $stm->close(); // Fecha o statement
                }else{
                    echo"<h2>ERRO AO FAZER A CONSULTA</h2>";
                    echo"<p>Parece que estamos com algum problema no sistema, aguarde um pouco até arrumarmos esse problema.</p>";
                }
            }
            $conexao->close(); // Fecha o conexão com o banco de dados
        ?>
        <button onclick="voltar('index.php')">VOLTAR</button>
    </main>
    <footer>
        <ul>
            <li><a href="https://privacy.thewaltdisneycompany.com/pt-br/nossa-politica-de-privacidade/" target="_blank">Política de Privacidade</a></li>
            <li><a href="https://disneytermsofuse.com/brazilian-portuguese/" target="_blank">Termos de Uso da Disney</a></li>
            <li><a href="https://www.disneyplus.com/pt-br/legal/aviso-de-direitos-de-privacidade-do-brasil" target="_blank">Avisos de Direitos de Privacidade do Brasil</a></li>
            <li><a href="https://www.disneyplus.com/pt-br/legal/pol%C3%ADtica-de-cookies" target="_blank">Políticas de Cookies</a></li>
            <li><a href="https://privacy.thewaltdisneycompany.com/pt-br/nossa-politica-de-privacidade/protecao-de-dados-no-brasil/" target="_blank">Proteção de Dados no Brasil</a></li>
            <li><a href="https://www.disneyplus.com/pt-br/legal/contrato-de-assinatura" target="_blank">Contrato de Assinatura</a></li>
            <li><a href="https://help.disneyplus.com/pt-BR/?utm_source=disneyplus&utm_medium=web&utm_campaign=unified-footer&utm_content=home-page">Ajuda</a></li><br>
            <li><a href="https://help.disneyplus.com/pt-BR/article/disneyplus-devices-supported" target="_blank">Dispositivos compatíveis</a></li>
            <li><a href="https://help.disneyplus.com/pt-BR/article/disneyplus-introduction">Sobre o Disney+</a></li><br>
            <li><a href="https://help.disneyplus.com/pt-BR/article/disneyplus-introduction">Anúncios Personalizados</a></li><br>
        </ul>
        <p>
        Disney+ é um serviço pago, baseado em assinatura e sujeito a termos e condições. O serviço Disney+ é comercializado por The Walt Disney Company (Brasil) Ltda., World Trade Center, Av. Das Nações Unidas, 12.551, 12.555, 12.559, Piso 10,<br>
        São Paulo/SP - CEP 04578-903, Brasil e CNPJ/M 73.042.962/0004-20
        </p>
        <p>&copy;Disney. Todos os direitos reservados.</p>
    </footer>
    <script src="scripts/script.js"></script>
</body>
</html>