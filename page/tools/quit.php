<?php

session_start();
require "../../include/db.php";
session_destroy();

session_start();
ses_msg("info", "<span class='mdi mdi-information'></span> Has salido de tu sesion.");
header('Location: /csm/');

?>
