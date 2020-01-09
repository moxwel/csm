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
    <title>Inicio - TuCSM</title>

    <!-- Bootstrap 4.4.1 CDN -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
    <!-- Material Design Icons CDN -->
    <link rel='stylesheet' href='//cdn.materialdesignicons.com/4.5.95/css/materialdesignicons.min.css'>

    <style>
    html,body {
      height: 100%;
    }
    </style>

</head>
<body>

<?php require "../include/navbar.php" ?>

<?php if (isset($_SESSION['msg_type'])) {
  // Muestra un mensaje solo si se ha definido uno antes ?>
  <div class="row">
    <div class="col-12">
        <div class="alert alert-<?php echo $_SESSION['msg_type'] ?> alert-dismissible fade show text-center" role="alert">
        <?php echo $_SESSION['msg'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php unset($_SESSION['msg_type']); unset($_SESSION['msg']); } ?>

<div class="row p-4 m-4 p-sm-4 m-sm-4 p-md-5 m-md-5">
  <div class="col-xs-12 col-md-6 col-lg-3 p-3">
    <div class="card">
        <img src="/csm/assets/home/mod.png" style="width:100%">
        <div class="card-body">
            <h5 class="card-title">Aulas USM</h5>
            <p class="card-text">Hay clases, certámenes, guías, salas, se supone que hay notas pero no xd</p>
            <a href="https://aula.usm.cl" class="btn btn-primary w-100">Ir</a>
        </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-3 p-3">
  <div class="card">
  <img src="/csm/assets/home/pago.png" style="width:100%">
        <div class="card-body">
            <h5 class="card-title">Portal de pagos</h5>
            <p class="card-text">5 de cada mes uwu</p>
            <a href="https://portalpagos.usm.cl" class="btn btn-primary w-100">Ir</a>
        </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-3 p-3">
    <div class="card">
        <img src="/csm/assets/home/siga.png" style="width:100%">
        <div class="card-body">
            <h5 class="card-title">SIGA</h5>
            <p class="card-text">¿Quieres sacarte el servicio? ¿Quieres encontrar algún documento? ¿Quieres conocer tu horario? Suerte, es por acá.</p>
            <a href="https://siga.usm.cl" class="btn btn-primary w-100">Ir</a>
        </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-3 p-3">
    <div class="card">
        <img src="/csm/assets/home/pas.png" style="width:100%">
        <div class="card-body">
            <h5 class="card-title">Pasaporte USM</h5>
            <p class="card-text">Acá consigues la cuenta, correo usm, correo sansano, contraseña, y cambios de contraseña.</p>
            <a href="https://pasaporte.usm.cl" class="btn btn-primary w-100">Ir</a>
        </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-3 p-3">
    <div class="card">
        <img src="/csm/assets/home/cat.png" style="width:100%">
        <div class="card-body">
            <h5 class="card-title">Catálogo USM</h5>
            <p class="card-text">Acá esta el catálogo en línea de las bilbiotecas de la universidad. Recuerda renovar los libros o devolverlos a tiempo.</p>
            <a href="https://catalogo.usm.cl/" class="btn btn-primary w-100">Ir</a>
        </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-3 p-3">
    <div class="card">
        <img src="/csm/assets/home/sala.png" style="width:100%">
        <div class="card-body">
            <h5 class="card-title">Reserva de salas Biblioteca USM</h5>
            <p class="card-text">Aquí puedes reservar salas de estudio para ti y tus compañeros.</p>
            <a href="https://usm-chile.libcal.com/spaces?lid=4352" class="btn btn-primary w-100">Ir</a>
        </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-3 p-3">
    <div class="card">
        <img src="/csm/assets/home/smoj.png" style="width:100%">
        <div class="card-body">
            <h5 class="card-title">SMOJ</h5>
            <p class="card-text">Si eres informatico, aqui puedes practicar Python. Y si no, por si te toca IWI131.</p>
            <a href="https://smoj.inf.utfsm.cl/" class="btn btn-primary w-100">Ir</a>
        </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-3 p-3">
    <div class="card">
        <img src="/csm/assets/home/beca.png" style="width:100%">
        <div class="card-body">
            <h5 class="card-title">Direccion de Relaciones Estudiantiles</h5>
            <p class="card-text">Las becaaaaaaaas.</p>
            <a href="https://www.rree.usm.cl/" class="btn btn-primary w-100">Ir</a>
        </div>
    </div>
  </div>
</div>

<!-- Bootstrap 4.4.1 Scripts -->
<script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>

</body>
</html>
