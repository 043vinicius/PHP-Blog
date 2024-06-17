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
    ?>

    <div class="row">
        <div class="cow-md-6 m-3 p-3">
            <div class="card">
                <form action="./addArtigo.php" method="post">
                    <div class="mb-3">
                        <label for="manchete" class="form-label">Manchete</label>
                        <input type="text" required class="form-control" id="manchete" name="manchete">
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoria</label>
                        <input type="text" required class="form-control" id="categoria" name="categoria">
                    </div>
                    <div class="mb-3">
                        <label for="materia" class="form-label">Matéria</label>
                        <textarea class="form-control" required id="materia" name="materia" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
    </div>
</body>
</html>