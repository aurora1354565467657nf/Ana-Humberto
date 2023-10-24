<?php
 if (isset($_SESSION['session'])){
    header('location: /dashboard');
 }

 if(isset($_POST['submit'])){
    include_once('database.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO tb_usuarios(usu_nome,usu_email,usu_senha) VALUES('$nome','$email','$senha')");

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
    <h1>Book Store - Register</h1>

    <form action="/users/create" method="POST">
        <label for="name">Name</label>
        <input type="text" name="nome">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email">
        <br>
        <label for="password">Senha</label>
        <input type="password" name="senha">
        <br>
        <button name="submit">Enviar</button>
    </form>

    
</body>
</html>