<?php
    include("../database.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = $conexao->query("SELECT * from escritores where email = '$email' and senha = '$senha'");

    if ($usuario->num_rows > 0) {
        $registro = $usuario->fetch_assoc();
        session_start();
        $_SESSION['escritor_id'] = $registro['id'];
        // header("Location: /projeto/index.php");
    } else {
        echo "Usuário ou senha inválidos";
    }

    header("Location: /projeto/index.php");
    $conexao->close();