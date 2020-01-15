<?php
session_start();
require "../include/db.php";
require "./tools/verify.php";
?>

<?php

$dia = $_GET['d'];
$mes = $_GET['m'];
$anno = $_GET['y'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendario - TuCSM</title>

    <!-- Bootstrap 4.4.1 CDN -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
    <!-- Material Design Icons CDN -->
    <link rel='stylesheet' href='//cdn.materialdesignicons.com/4.5.95/css/materialdesignicons.min.css'>

</head>
<body>

<?php require "../include/navbar.php" ?>

<div class="container-fluid pt-2" style="height: 90%">
    <h1><?php print("Seleccion para el $dia/$mes/$anno") ?></h1>
</div>

<h1>Sin eventos</h1>

</body>
</html>
