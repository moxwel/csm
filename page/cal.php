<?php
session_start();
require "../include/db.php";
require "./tools/verify.php";
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

    <style>
    html,body {
      height: 100%;
    }
    table {
        height: 100%;
    }
    table,th,td {
        width: 1000px;
    }
    </style>

</head>
<body>

<?php require "../include/navbar.php" ?>

<div class="container-fluid pt-2" style="height: 90%">
    <div class="row" style="height: 100%">

        <div class="col-3 pt-2">
        <div class="card p-3">
            <h4>Ingresa una fecha:</h4>
            <form class="form-inline" method="get">

                <input class="form-control" type="date"     name="fecha" required>
                <input class="btn btn-primary ml-4" type="submit"   name="env"   value="Ingresar">
            </form>
        </div>
        <div class="card p-3 mt-3">
            <h4>Añadir evento:</h4>
            <form class="form-inline" method="get">
                <input type="text" class="form-control mb-3" placeholder="Certamen de..." required>
                <input class="form-control mb-3" type="date"     name="fecha" required>
                <button class="btn btn-outline-success ml-4" type="submit"   name="env"   value="IngEv"><span class="mdi mdi-calendar-plus"></span> Añadir evento</button>
            </form>
        </div>

        </div>

        <div class="col">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr style="height: 15px; text-align: center">
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miercoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                        <th>Sabado</th>
                        <th>Domingo</th>
                    </tr>
                </thead>

                <tr>
<?php
if (isset($_GET['fecha'])) {
    $fecha = explode("-", $_GET['fecha']); // 0=año, 1=mes, 2=dia

    $funix = strtotime($_GET['fecha']); // numeros random
    $dsem = date("N", $funix) - 1; // 0=lunes ... 6=domingo
    $dtot = date("t", $funix); // numero entre 28 y 31

    // print($fecha[2] . "/" . $fecha[1] . "/" . $fecha[0] . "<br>");
    // print("Dia de la semana:" . $dsem . "<br>");
    // print("Dias totales este mes: " . $dtot . "<br>");

    $d = 1; // dia
    $w = 1; // semana
    $dw = date("N", strtotime($fecha[0] . "-" . $fecha[1] . "-1")) - 1; // el dia de la semana del primer dia del mes

    // Rellar espacios vacios antes de comenzar el mes
    $z = 0;
    while ($z < $dw) {
        print("<th></th>");
        $z++;
    }

    // Rellenar tabla con los dias comenzando desde el 1
    while ($d <= $dtot) {
        if ($d == date("j") && $fecha[1] == date("m") && $fecha[0] == date("Y")) {
            ?><th><a href="select.php?<?php print("d=$d&m=$fecha[1]&y=$fecha[0]") ?>"> <?php print("Hoy: $d") ?> </a></th><?php
        } elseif ($d == $fecha[2]) {
            ?><th><a href="select.php?<?php print("d=$d&m=$fecha[1]&y=$fecha[0]") ?>"> <?php print("Seleccion: $d") ?> </a></th><?php
        } else {
            ?><th><a href="select.php?<?php print("d=$d&m=$fecha[1]&y=$fecha[0]") ?>"> <?php print("$d") ?> </a></th><?php
        }

        // Cuando sea nueva semana se crea nueva fila
        if (($dw % 7) == 6) {
            print("</tr><tr>");
        }
        $d++;
        $dw++;
    }
}
?>
                </tr>
            </table>
        </div>
    </div>
</div>

</body>
</html>
