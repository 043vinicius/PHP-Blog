<?php
    include("../database.php");
    session_start();

    $manchete = $_POST['manchete'];
    $categoria = $_POST['categoria'];
    $materia = $_POST['materia'];
    $escritor_id = $_SESSION['escritor_id'];

    $sql = "INSERT INTO artigos (manchete, categoria, materia, escritor_id) VALUES ('$manchete', '$categoria', '$materia', '$escritor_id')";
    if ($conexao->query($sql) === TRUE) {
        echo "Artigo adicionado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }

    // enviar para o artigo
    header("Location: /projeto/artigo.php?id=" . $conexao->insert_id);
    $conexao->close();
