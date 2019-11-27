<?php
session_start();
require "../include/db.php";
require "../include/header.html";
?>

  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <center>
                  <img class="img-fluid mr-md-3" src="../assets/logo.png" alt="logo">
                </center>
              </div>
            </div>
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                
                <h3 class="login-heading mb-4"><span class="mdi mdi-login"></span> Ingresasion</h3>

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
                  <div class="form-label-group">
                    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputEmail">tu.correo@usm.cl</label>
                  </div>

                  <div class="form-label-group">
                    <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Contraseña</label>
                    <p><a href="signup.php">Hice la olvidasion</a></p>
                  </div>

                  <div class="custom-control custom-checkbox mb-3">
                    <input name="save" type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Hacer la recordasion</label>
                  </div>

                  <button name="send" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Entrar</button>

                  <div class="text-center">
                    <p class="small">¿No tienes cuenta? <a href="signup.php">Haz la registrasion</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require "../include/footer.html" ?>
