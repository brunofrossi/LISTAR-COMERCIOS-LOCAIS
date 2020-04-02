<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bd = 'lista_tel';

    $conexao = new mysqli($servidor, $usuario, $senha, $bd);

    if(mysqli_connect_errno()){
        echo "Erro ao conectar com o banco";
        exit();
    }
?>
