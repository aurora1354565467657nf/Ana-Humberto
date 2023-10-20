<?php

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = 'Anvi4002#';
    $basededados = 'bd_login';

    $conexao = new mysqli($servidor, $usuario, $senha,
    $basededados);

    if($conexao->connect_errno) {
    echo 'Falha ao conectar: (' . $conexao->connect_errno . ')'
    . $conexao->connect_error;
    }

?>
