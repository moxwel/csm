<nav class="navbar navbar-expand-md navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="/csm/assets/logonav.png" height="30" class="d-inline-block align-top" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cal.php">Calendario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Perfil</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-md-auto">
        Sesion: <?php print($email) ?>
    </ul>
    <a class="btn btn-danger my-2 my-sm-0 ml-3" href="/csm/page/tools/quit.php">Salir <span class="mdi mdi-logout"></span></a>
  </div>
</nav>
