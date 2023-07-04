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
<<<<<<< HEAD
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
=======
    <?php
        $session = $_SESSION['session'];
        echo "Bem vindo $session!";
    ?>  
    </br>
    <a href="/">Voltar para página inicial</a>
    </br>
    <a href="/logout">Sair</a>
>>>>>>> 728f73c510924d065249a6407310f98afb6fe5d8
</body>
</html>