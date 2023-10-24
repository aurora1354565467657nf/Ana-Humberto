<?php 

 session_start();

 include __DIR__ . '/database.php';
 include __DIR__ . '/auth.php';
 include __DIR__ . '/router.php';

 $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

 if(array_key_exists($uri, $rotas)){
    include __DIR__ . $rotas[$uri];
 }else{
    http_response_code(404);
    echo "<h1> Página não encontrada </h1>";
 }


?>