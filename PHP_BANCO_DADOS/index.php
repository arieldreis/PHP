<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>DIGITE OS DADOS DO LIVRO</h1>
    </header>
        <section>
            <form action="cad.php" method="post">
                <label for="idNome" class="label">ID:</label><br>
                <input type="number" name="idlivro" id="idlivro" placeholder="Digite o ID do livro..." required><br>
                <label for="idSobrenome" class="label">Nome do Livro:</label><br>
                <input type="text" name="nomelivro"  placeholder="Digite o nome do livro..." required><br>
                <label for="quant" class="label">QUANTIDADE DE LIVROS:</label><br>
                <input type="number" name="quantLivro" id="quantLivro" placeholder="Digite a quantidade de livros" required>
                <label for="preco" class="label">PREÇO: R$</label><br>
                <input type="number" name="precoLivro" placeholder="Digite o valor do livro..."  step="0.01" required>
            <button type="submit">ENVIAR</button>
            </form>
        </section>
</body>
</html>