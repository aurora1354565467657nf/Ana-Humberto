<?php
 if (isset($_SESSION['session'])){
    header('location: /dashboard');
 }

 if(isset($_POST['submit'])){
    include_once('database.php');

    $livro = $_POST['livro'];
    $result = mysqli_query($conexao, "INSERT INTO tb_livros(liv_nome, liv_usu_id) VALUES('$livro')");
 }

 $sql = "SELECT * FROM tb_livros order by liv_nome";
 $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/books/create" method="post">
        <h1> Cadastro livros </h1>
        <label> Informe seu livro: </label>
        <input type="text" name="livro">
        <button name="submit"> Enviar</button>
    </form>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome<th>
                    <th scope="col">IDUSER<th>
                </tr>
            </thead>
        <tbody>
            <?php
               while($user_data = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" .$userdata['liv_id']."</td>";
                echo "<td>" .$userdata['liv_nome']."</td>";
               }
            ?>
        </tdbody>

    </div>
</body>
</html>