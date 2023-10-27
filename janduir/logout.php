<?php
    if (isset($_SESSION['session'])){
        unset($_SESSION['session']);
        session_destroy();
        header('location: /');
    }

    header('location: /');

?>