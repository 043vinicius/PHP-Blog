<?php
    $_host = "localhost";
    $_user = "root";
    $_password = "123456";
    $_database = "projeto_terca";
    $conexao = mysqli_connect($_host, $_user, $_password, $_database);
    if(!$conexao){
        echo "Falha na conexão com o banco de dados";
    }