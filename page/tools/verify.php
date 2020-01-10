<?php

// Para verificar si esta logueado, si no, no permite entrar a la pagina.
if (isset($_SESSION['loged']) and $_SESSION['loged']) {
    $email = $_SESSION['email'];
} else {
    ses_msg("info", "<span class='mdi mdi-information'></span> Inicia sesion primero.");
    header('Location: /csm/');
    die();
}
