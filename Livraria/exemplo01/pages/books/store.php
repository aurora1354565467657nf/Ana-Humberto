<?php
 if(isset($_POST['email']) and ($_POST['senha'])){
    header("location: /books/index");
 }else{
    header("location: /home");
 }
?>