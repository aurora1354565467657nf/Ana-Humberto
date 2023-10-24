<?php

 include __DIR__ . '/router.php';

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'db_livraria';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno){
    echo "Erro";
}else{
    echo "Conexão realizada com sucesso!";
}

?>