<?php
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
                <h3 class="login-heading mb-4">Ingresa al csm</h3>
                <form action="" method="get">
                  <div class="form-label-group">
                    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputEmail">correo@usm.cl</label>
                  </div>

                  <div class="form-label-group">
                    <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Contraseña</label>
                  </div>

                  <div class="custom-control custom-checkbox mb-3">
                    <input name="save" type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Hacerme la recordación</label>
                  </div>

                  <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Listo</button>

                  <div class="text-center">
                    <a class="small" href="signup.php">No tengo cuenta, soy noob</a>
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
