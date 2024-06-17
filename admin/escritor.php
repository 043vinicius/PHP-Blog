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
        include("../component/navbar.php");
        include("../database.php");
        $escritor_id = $_SESSION['escritor_id'];
        $escritor = $conexao->query("SELECT * from escritores where id = $escritor_id")->fetch_assoc();
    ?>

    <div class="row">
        <div class="col-md-3 m-3 p-3"></div>
        <div class="col-md-6 m-3 p-3">
            <div class="card">
                <form action="./editarLogin.php" method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $escritor['nome']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $escritor['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        <div class="col-md-3 m-3 p-3"></div>
    </div>
    <div class="row">
        <div class="col-md-3 m-3 p-3"></div>
        <div class="col-md-6 m-3 p-3">
            <?php
                $escritor_id = $_SESSION['escritor_id'];
                $artigos = $conexao->query("SELECT * from artigos where escritor_id = $escritor_id");

                if ($artigos->num_rows > 0) {
                    while($registro = $artigos->fetch_assoc()) {
                    echo "<div class=\"card\">";
                    echo "<span>" . $registro["manchete"] . "</span>";
                    echo "<span>" . "Categoria: " . $registro["categoria"] . "</span>";
                    echo "<br>";
                    echo "<span style=\"text-align: center;\">";
                    echo "<a class=\"btn btn-primary\" style=\"width: 30%; margin-right: 8px;\" href=\"./editArtigoForm.php?id=" . $registro["id"] . "\">Editar</a>";
                    echo "<a class=\"btn btn-danger\" style=\"width: 30%;\" href=\"./deleteArtigoForm.php?id=" . $registro["id"] . "\">Remover</a>";
                    echo "</span>";
                    echo "</div><br>";

                    }
                } else {
                    echo "Nenhum resultado encontrado";
                }
            ?>
    </div>
</body>
</html>