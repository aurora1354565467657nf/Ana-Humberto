<?php

if ( ! isset($_SESSION['session'])){
    header('location: /');
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css.css">
    <title>Document</title>
</head>
<body>
    <div class="caixa1">
        <div class="caixa2">
            <div>
                <?php
                $session = $_SESSION['session'];
                echo "<h3>Bem vindo ao site, $session! </h3>";
                ?>  
            </div>
                <div>
                    <a href="/">Voltar para página inicial</a>
                    <a href="/logout">Sair</a>
                </div>
        </div>
    </div>
</body>
</html>