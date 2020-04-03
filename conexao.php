<?php
    $servidor = 'localhost';
    $usuario = 'u816723436_lista_tel';
    $senha = 'fE=8Qo1H';
    $bd = 'u816723436_lista_tel';

    $conexao = new mysqli($servidor, $usuario, $senha, $bd);

    if(mysqli_connect_errno()){
        echo "Erro ao conectar com o banco";
        exit();
    }
?>
