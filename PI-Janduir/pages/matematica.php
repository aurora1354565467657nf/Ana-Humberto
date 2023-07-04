<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Jogos de Matemática</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid" >
    <a class="navbar-brand" href="#">PI de Química</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
    
        <?php
            if ( ! isset($_SESSION['session'])){
              echo '<li class="nav-item"><a class="nav-link" href="/create">Login</a>';
             
            } else {
              $session = $_SESSION['session'];
              echo "<li class='nav-item'><a class='nav-link' href='/create'> $session </a>
              </li>";

              echo '<li class="nav-item"><a class="nav-link" href="/logout">Sair</a></li>';
            }
            ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Jogos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/quimica">Química</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/matematica">Matemática</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/fisica">Física</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar jogos" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
<div id="services-area">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3 mt-3 text-center">
                <h1 class="main-title">Divirta-se com os nossos jogos de Matemática!</h1>
            </div>
            <div class="col-md-4 services-box">
                <h4>Matemática 01</h4>
                <i class="fas fa-mobile-alt"><img style='width:100%'src="../static/jogo_mat1.jpg"></i>
                <p>Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão.
                   Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando um impressor desconhecido pegou uma galera de tipos e os embaralhou para fazer um livro de espécimes de tipos.</p>
            </div>
            <div class="col-md-4 services-box">
                <h4>Matemática 02</h4>
                <i class="fas fa-mobile-alt"><img style='width:100%'src="../static/jogo_mat1.jpg"></i>
                <p>Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão.
                   Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando um impressor desconhecido pegou uma galera de tipos e os embaralhou para fazer um livro de espécimes de tipos.</p>
            </div>
            <div class="col-md-4 services-box">
                <h4>Matemática 03</h4>
                <i class="fas fa-mobile-alt"><img style='width:100%'src="../static/jogo_mat1.jpg"></i>
                <p>Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão.
                   Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando um impressor desconhecido pegou uma galera de tipos e os embaralhou para fazer um livro de espécimes de tipos.</p>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>