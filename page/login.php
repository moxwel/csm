<?php
session_start();
require "../include/db.php";

// Si ya esta logueado, ir directamente al inicio
if (isset($_SESSION['loged']) and $_SESSION['loged']) {
    ses_msg("info", "<span class='mdi mdi-information'></span> Ya tienes la sesion iniciada.");
    header('Location: /csm/page/home.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Iniciar sesión - TuCSM</title>

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

  <!-- Pagina completa -->
  <div class="container-fluid h-100">
    <div class="row h-100">
      <!-- Izquierda: Imagen de fondo -->
      <div class="col-sm-3 col-md-5 col-lg d-none d-sm-block" style="background-image: url('../assets/loginbg.jpg'); background-position: center; background-size: cover;"></div>

      <!-- Derecha: Zona de login -->
      <div class="col-sm-9 col-md-7 col-lg align-self-center">
        <div class="row">
          <!-- Margen izquierdo -->
          <div class="col-sm-0 col-md-1 col-xl-2 d-none d-sm-block"></div>

          <!-- Centro -->
          <div class="col">
            <img class="img-fluid" src="/csm/assets/logospace.png" alt="logo">
            <h3><span class="mdi mdi-login"></span> Iniciar sesión</h3>
            <br>

            <?php if (isset($_SESSION['msg_type'])) {
              // Muestra un mensaje solo si se ha definido uno antes ?>
              <div class="alert alert-<?php echo $_SESSION['msg_type'] ?> alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['msg'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php unset($_SESSION['msg_type']); unset($_SESSION['msg']); } ?>

            <form action="./tools/log.php" method="post">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="nombre.apellido@usm.cl" required autofocus>
              </div>

              <div class="form-group">
                <input name="pass" type="password" class="form-control" placeholder="Contraseña" required>
                <p class="small"><a href="#">Olvidé mi contraseña</a></p>
              </div>

              <div class="form-row">
                <div class="form-group col align-self-center">
                  <div class="custom-control custom-checkbox">
                    <input name="save" type="checkbox" class="custom-control-input" id="customCheck1">
                    <label for="customCheck1" class="custom-control-label">Recordar sesión</label>
                  </div>
                </div>

                <div class="form-group col">
                  <button name="send" class="btn btn-primary btn-lg btn-block shadow" type="submit">Continuar <span class="mdi mdi-arrow-right-bold"></span></button>
                </div>
              </div>
            </form>

            <hr>
            <p class="small text-center">¿No tienes cuenta? <a href="signup.php">Regístrate</a></p>
          </div>
          <!-- FIN CONTENIDO -->

          <!-- Margen derecho -->
          <div class="col-sm-0 col-md-1 col-xl-2 d-none d-sm-block"></div>
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
