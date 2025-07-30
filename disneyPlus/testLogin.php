<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['emailindex']) && !empty($_POST['passwordindex'])){
        // Acessa o sistema
        include_once("conexao.php");
        $email = $_POST['emailindex'];
        $senha = $_POST['passwordindex'];
        // print_r('Email ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM tabela_disney WHERE email = '$email'"; // Verificação com o banco de dados
        $result = $conexao->query($sql);
        // print_r($sql);
        // print_r('<br>');
        // print_r($result);
        if(mysqli_num_rows($result) < 1){ // Se não houver registros aparece uma mensagem
            header('Location: index.php');
        }else{
            $user = mysqli_fetch_assoc($result);
            $hashSalvo = $user['senha'];
            if(password_verify($senha, $hashSalvo)){
                session_start();
                $_SESSION['nome'] = $user['nomeuser']; // Aqui acessa o banco de dados e pega o nome do usuário.
                // ✅ Login OK, redireciona para a página de filmes
                header("Location: conteudo.php");
                exit(); // Importante: para parar a execução aqui!
            }else{
                echo ('Senha incorreta.');
            }
        }
    }else{
        header('Location: testLogin.php');
    }
?>