<?php
    include("../database.php");

    $manchete = $_POST['manchete'];
    $categoria = $_POST['categoria'];
    $materia = $_POST['materia'];

    $sql = "INSERT INTO artigos (manchete, categoria, materia) VALUES ('$manchete', '$categoria', '$materia')";

    if ($conexao->query($sql) === TRUE) {
        echo "Artigo adicionado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }

    $conexao->close();
