<?php

if (isset($_SESSION['session'])){
    header('location: /dashboard');
}
?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="../static/css.css">
    <title>Document</title>
</head>
<body>
    <div class="caixa1">
        <div class="formulario">
            <form action="/cadastro" method="post">
                <div>
                <label for="session">Insira o nome do usuario:</label>
                <input type="text" name="session" id="">
                </div>
                <div>
                <label> Insira a senha</label>
                <input type="text">
                </div>
                <input id="botao" type="submit" value="enviar">
            </form>
        </div>
    </div>
=======
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row aling-itens-center">
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-light" action="/cadastro" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" name="session" class="form-control" id="inputEmail" placeholder="email">
                        <label for="inputEmail">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="senha" class="form-control" id="inputEmail" placeholder="senha">
                        <label for="inputEmail">Senha</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label for="">
                            <input type="checkbox" value="Lembrar de mim"> Lembrar de mim
                        </label>
                        </div>
                    <button class="btn btn-lg btn-success" type="submit" value="enviar">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- <form action="/cadastro" method="post">
        <label for="session">Insira o nome do usuario:</label>
        <input type="text" name="session" id="">
        <label> Insira a senha</label>
        <input type="text">
        <input type="submit" value="enviar">
    </form> -->

>>>>>>> 728f73c510924d065249a6407310f98afb6fe5d8
</body>
</html>