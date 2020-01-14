<?php

// Para verificar si esta logueado, si no, no permite entrar a la pagina.
if (isset($_SESSION['loged']) and $_SESSION['loged']) {
    // Se transmiten variables de la sesion de uno
    $email = $_SESSION['email'];
    $id = $_SESSION['id'];
} else {
    ses_msg("info", "<span class='mdi mdi-information'></span> Inicia sesion primero.");
    header('Location: /csm/');
    die();
}
