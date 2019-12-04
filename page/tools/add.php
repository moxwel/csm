<?php

session_start();
require "../../include/db.php";

// La comprobacion de datos solo se hara si se ha enviado un
// formulario desde la pagina correspondiente.
if (isset($_POST['send'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];

    if ($pass == $pass2) {
        $pwd = password_hash($pass, PASSWORD_BCRYPT);

        $query = "INSERT INTO users(email, pass) VALUES('$email', '$pwd')";
        $res = mysqli_query($conn, $query);

        if ($res) {
            ses_msg("success", "<span class='mdi mdi-check'></span> Cuenta creada con éxito.");
            header('Location: /csm/page/login.php');
        } else {
            ses_msg("danger", "<span class='mdi mdi-alert'></span> Este correo ya está registrado.");
            header('Location: /csm/page/signup.php');
        }
    } else {
        ses_msg("info", "<span class='mdi mdi-information'></span> Las contraseñas no coinciden.");
        header('Location: /csm/page/signup.php');
    }
} else {
    ses_msg("warning", "<span class='mdi mdi-alert'></span> Por favor, usa el formulario.");
    header('Location: /csm/page/signup.php');
}
