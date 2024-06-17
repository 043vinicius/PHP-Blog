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
        include("./database.php");
    ?>

    <div class="row">
        <div class="cow-md-6 m-3 p-3">
        <?php
            $artigos = $conexao->query("SELECT * from artigos");

            if ($artigos->num_rows > 0) {
                while($registro = $artigos->fetch_assoc()) {
                echo "<div class=\"card\">";
                echo "<span>" . $registro["manchete"] . "</span>";
                echo "<span>" . "Categoria: " . $registro["categoria"] . "</span>";
                echo "<a href=\"./artigo.php?id=" . $registro["id"] . "\">Ler mais</a>";
                echo "</div><br>";

                }
            } else {
                echo "Nenhum resultado encontrado";
            }
        ?>
        </div>
    </div>
</body>
</html>