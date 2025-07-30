<?php
    session_start();
    if(!isset($_SESSION['nome'])){
        header('Location: testLogin.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Disney+</title>
    <link rel="stylesheet" href="css/conteudo.css">
    <link rel="shortcut icon" href="css/disney-1.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Bem-vindo ao site da Disney+</h1>
        <nav>
            <ul class="listas">
                <li><a href="#">Início</a></li>
                <li><a href="#">Filmes</a></li>
                <li><a href="#">Séries</a></li>
                <li><a href="#">Minha Conta</a></li>
                <li><a href="#">Sair</a></li>
            </ul>
        </nav>
        <div class="containerUsuario">
            <h3>Seja bem-vindo <?php echo $_SESSION['nome']?></h3>
        </div>
    </header>
    <main>
        <div class="content">
            <h2>RECOMENDAÇÃO PARA VOCÊ</h2>
            <div class="movies">
                <div class="movie-item">
                    <img src="css/filmes_exemplo/deadepool3.jpg" alt="Filme 1">
                    <button>DEADPOOL 3</button>
                </div>
                <div class="movie-item">
                    <img src="css/filmes_exemplo/demolidor.jpg" alt="Filme 2">
                    <button>DEMOLIDOR</button>
                </div>
                <div class="movie-item">
                    <img src="css/filmes_exemplo/simpsons.jpg" alt="Filme 3">
                    <button>SIMPSONS</button>
                </div>
            </div>
        </div>
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
</body>
</html>