<?php

session_start();
require "../../include/db.php";

// La comprobacion de datos solo se hara si se ha enviado un
// formulario desde la pagina correspondiente.
if (isset($_POST['send'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Extraccion de datos desde db
    $query = "SELECT * FROM users WHERE email='$email'";
    $res = mysqli_query($conn, $query);
    $fila = mysqli_fetch_array($res);

    // Si no hay un email registrado con el
    // correo dado, entonces devuelve un error.
    if ($fila) {
        $id = $fila['id'];
        $pwd = $fila['pass'];

        if (password_verify($pass, $pwd)) {
            echo "Acceso con exito. Tu ID es: '$id'";
        } else {
            ses_msg("danger", "<span class='mdi mdi-alert'></span> Credenciales incorrectas.");
            header('Location: /csm/page/login.php');
        }
    } else {
        ses_msg("danger", "<span class='mdi mdi-alert'></span> Credenciales incorrectos.");
        header('Location: /csm/page/login.php');
    }
} else {
    ses_msg("warning", "<span class='mdi mdi-alert'></span> Por favor, usa el formulario.");
    header('Location: /csm/page/login.php');
}
