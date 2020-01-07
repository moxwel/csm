<?php

require "funcs.php";

// Crear conexion
$conn = mysqli_connect('localhost', 'root', '');

// Si no hay conexion al servidor, mostrar mensaje de error
if (empty($conn)) {
    ses_msg("dark", "<i class='mdi mdi-power-plug-off'></i> <strong>ERROR:</strong> Error de conexion al servidor.");
} else {
    // Probar conexion a database "csm"
    $res = mysqli_select_db($conn, 'csm');
    $err = mysqli_error($conn);

    // Probar existencia de tabla "users"
    $query = "SELECT id, email, pass FROM users LIMIT 1";
    $res2 = mysqli_query($conn, $query);
    $err2 = mysqli_error($conn);

    // Mostrar errores si no existe database, o si no existe tabla
    if (empty($res)) {
        ses_msg("dark", "<i class='mdi mdi-database-remove'></i> <strong>ERROR:</strong> Error de conexion a base de datos.");
    } else {
        if (empty($res2)) {
            ses_msg("dark", "<i class='mdi mdi-table-remove'></i> <strong>ERROR:</strong> Sin tabla de datos.");
        }
    }
}
