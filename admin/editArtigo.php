<?php
    include("../database.php");
    session_start();

    $id = $_POST['id'];
    $manchete = $_POST['manchete'];
    $categoria = $_POST['categoria'];
    $materia = $_POST['materia'];

    $sql = "UPDATE artigos SET manchete = '$manchete', categoria = '$categoria', materia = '$materia' WHERE id = $id";
    if ($conexao->query($sql) === TRUE) {
        echo "Artigo atualizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }

    // enviar para o artigo
    header("Location: /projeto/artigo.php?id=" . $id);
    $conexao->close();