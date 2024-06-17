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

    $conexao->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Projeto</title>
</head>
<?php
    include("../component/navbar.php");
?>