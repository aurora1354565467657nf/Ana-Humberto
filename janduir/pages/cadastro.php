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

</body>
</html>