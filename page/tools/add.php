<?php

if (isset($_POST['send'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];

    if ($pass == $pass2) {
        echo "correcto";
    } else {
        header('Location: /csm/page/signup.php');
    }
}
