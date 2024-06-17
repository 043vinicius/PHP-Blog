<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Projeto</title>
</head>
<body>
    <?php
        include("./component/navbar.php");
    ?>
    <div class="row">
        <div class="col-md-3"></div><!--Div vazia -->
        <div class="col-md-6 m-3 p-3">
            <?php
                include("./database.php");
                $id = $_GET['id'];
                $artigo = $conexao->query("SELECT * from artigos where id = $id");
                $registro = $artigo->fetch_assoc();
                $escritor_id = $registro["escritor_id"];
                $escritor = $conexao->query("SELECT * from escritores where id = $escritor_id");
                $registro_escritor = $escritor->fetch_assoc();
                echo "<h1 style=\"text-align: center;\">" . $registro["manchete"] . "</h1>";
                echo "<b><div style=\"text-align: center;\">" . $registro["categoria"] . "</div></b>";
                echo "<b><div style=\"text-align: center;\">" . "Escrito por: " . $registro_escritor["nome"] . "</div></b><br>";

                echo "<span>" . $registro["materia"] . "</span>";
            ?>
        </div>
        <div class="col-md-3"></div>
    </div>
    </div>
</body>
</html>