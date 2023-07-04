

<?php
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'POST'){

        $session = $_POST['session'];
        $_SESSION['session'] = $session;

        header('location: /home');
    } else {
        header('location: /');
    }

?>