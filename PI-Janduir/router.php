<?php

    $rotas = [
        '/' => '/pages/home.php',
        '/dashboard' => '/pages/dashboard.php',
        '/home' => '/pages/home.php',
        '/create' => '/pages/cadastro.php',
        '/cadastro' => '/cadastro.php',
        '/logout' => '/logout.php',
        '/quimica' => '/pages/quimica.php',
        '/fisica' => '/pages/fisica.php',
        '/matematica' => '/pages/matematica.php'
    ];

    function roteador ($uri,$rotas) {
        if (array_key_exists($uri,$rotas)){
            include __DIR__.$rotas[$uri];
        } else {
            include __DIR__.$rotas['/'];
            echo 'pagina inexistente';
        }
    }
?>