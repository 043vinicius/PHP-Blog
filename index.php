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
    <div>
        <?php
            include('./component/navbar.php');
            include('./database.php');
        ?>
    </div>
    
    <div class="row">
        <div class="col-md-2 m-3 p-3"></div>
        <div class="col-md-7 m-3 p-3">
            <p class="text-center">Seja bem-vindo ao blog da UP!</p>
            <p class="text-center">Aqui você encontra os melhores artigos sobre tecnologia, programação e muito mais!</p>
            <p class="text-center">Aproveite para ler os artigos mais recentes e se manter atualizado.</p>
        </div>
        <div class="col-md-2 m-3 p-3"></div>
    </div>

    <div class="row">
        <div class="col-md-2 m-3 p-3"></div>
        <div class="col-md-7 m-3 p-3">
            <div style="text-align: center;">
                <h3>Artigos recentes</h3>
            </div>
        </div>
        <div class="col-md-2 m-3 p-3"></div>
    </div>

    <div class="row">
        <div class="col-md-2 m-3 p-3"></div>

        <div class="col-md-7 m-3 p-3">
        <?php
            $artigos = $conexao->query("SELECT * from artigos");

            if ($artigos->num_rows > 0) {
                while($registro = $artigos->fetch_assoc()) {
                echo "<div class=\"card\" style=\"padding: 8px;\">";
                echo "<h4>" . $registro["manchete"] . "</h4>";
                echo "<span>" . "Categoria: " . $registro["categoria"] . "</span>";
                echo "<span>" . "Escrito em: " . date("d/m/Y H:i:s", strtotime($registro["data"])) . "</span>";
                echo "<span style=\"text-align: center;\">";
                echo "<a class=\"btn btn-secondary\" style=\"width: 20%;\" href=\"./artigo.php?id=" . $registro["id"] . "\">Ler mais</a>";
                echo "</span>";
                echo "</div><br>";

                }
            } else {
                echo "Nenhum resultado encontrado";
            }
        ?>
        </div>
        <div class="col-md-2 m-3 p-3"></div>
</body>
</html>