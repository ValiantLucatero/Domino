<!DOCTYPE html>
  <html>
<head>
  <title>
    Registro
  </title>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../Programs/jquery.js"></script>
  <link rel="stylesheet" href="../Frameworks/BS/bootstrap.min.css"/>
  <script src="../Frameworks/BS/bootstrap.min.js"></script>
  <link rel="stylesheet/less" type="text/css" href="../Styles/dise.less"/>
  <script src="../Programs/less.min.js" type="text/javascript"></script>
  <script>
    $(document).ready(function(){
        $(".dropdown-toggle").dropdown();
    });
  </script>
</head>
<body>
<?php
echo'<header id="main_header">
  <nav id="barra"class="navbar navbar-default " data-spy="affix" data-offset-top="197">
    <div class="navbar navbar-default navbar-fat navbar-clean">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse"
          data-target=".navbar-ex1-collapse">
            <span class="sr-only">Desplegar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="http://www.prepa6.unam.mx/ENP6/_P6/">
            <img class="responsive" width="15%" alt="Brand" src="../Resources/logo.png">
        </a>
        </div>
        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse" id="nav_collapse" >
          <ul id="nav-main" class="nav navbar-nav navbar-rigth">
            <li class="active"><a href="inicio.html"><em>Inicio</em></a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Alumnos
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                  <li class="dropdown-header">Alumnos</li>
                  <li><a href="../Programs/login.php"><em>Inicio de sesión</em></a></li>
                  <li><a href="../Programs/iniciar.php"><em>Registrarse</em></a></li>
              </ul>
            </li>
            <li class="dropwdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Apoyos y servicios académicos
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Programas</li>
                  <li><a href="http://dgenp.unam.mx/planesdeestudio/cuarto/1406.pdf"><em>Programa Dibujo II</em></a></li>
                  <li> <a href="http://dgenp.unam.mx/planesdeestudio/cuarto/1406.pdf"><em>Programa Dibujo Constructivo II</em></a></li>
                </ul>
            </li>
            <li><a href="contacto.html"><em>Contacto</em></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
  <div class="container">
    <div class="row">
      <div class="col-xs text-center">
        <h1>
          Registro
        </h1>
      </div>
    </div>
  </div>
  <section class="container">
    <div class="row text-center">
      <div  class=" col-xs alert alert-warning"id="ok"></div>
    </div>
    <form  class="form-horizontal" method="POST" id="formid">
    <!--Validación comienza desde html-->
      <div class="form-group">
        <label class="col-xs col-sm-2 control-label">
          Nombre de usuario
        </label>';
        echo'<div class="col-xs col-sm-10">';
          echo'<input class="form-control" type="text" name="name" pattern="[A-z\d\s._#\ÁÉÍÓÚáéíó]{4,20}" id="name" required/>';
        echo'</div>
      </div>
      <div class="form-group">
        <label class="col-xs col-sm-2 control-label">
          Número de cuenta
        </label>
        <div class="col-xs col-sm-10">';
          echo'<input class="form-control" type="text" name="cuenta"pattern="[\d]{9}" id="cuenta" required/>';
        echo'</div>
      </div>
      <div class="form-group">
        <label class="col-xs col-sm-2 control-label">
          Grado
        </label>
        <div class="col-xs col-sm-10">';
          echo'<input class="form-control" type="number" min="4" max="6" name="grado" id="grado"/>';
      echo'  </div>
      </div>
      <div class="form-group">
        <label class="col-xs col-sm-2 control-label">
          Contraseña
        </label>
        <div class="col-xs col-sm-10">';
          echo'<input class="form-control" type="password" name="contra" id="contra" required/>';
      echo'  </div>
      </div>
      <div class="form-group">
        <label class="col-xs col-sm-2 control-label">
          Compruebe contraseña
        </label>
        <div class="col-xs col-sm-10">';
        echo'  <input class="form-control" type="password" name="contra2" id="contra2" required/>';
      echo'  </div>
      </div>
      <div class="form-group">
        <div  class="col-xs col-sm-10 col-sm-offset-2">
          <input class="btn btn-block btn-success" type="submit" value="Enviar" />
        </div>
      </div>
    </form>';
    ?>
  </section>
  <section class="container">
  </section>
  <aside class="container">
  </aside>
  <footer class="text center">

    <div class="container">
      <a class="up-arrow" href="#" data-toggle="tooltip" title="TO TOP">
           <span class="glyphicon glyphicon-chevron-up"></span>
      <div class="row">
        <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
          <p class="lead">
            Corina número 3, Colonia Del Carmen, Delegación Coyoacán, C.P. 014100, CDMX Universidad Nacional Autónoma de México (UNAM). Hecho en México.
            Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica.
          </p>
            <div id="c">Créditos</div>
            <div class="modal fade" id="creditos" role="dialog">
              <div class="modal-content">
                <button type="button" class="close" data_dimiss="modal">&times;</button>
                <h2 class="modal-title text center"><strong>Créditos</strong></h2>

              <div class="modal-body">
                <div class="text-justify blockquote">
                  <h3 class="text center"><strong>Programación, Diseño y Desarrollo Web</strong></h3>
                  <p class="text center">Alumnos de la Escuela Nacional Preparatoria</p>
                  <h3 class="text center"><strong>Recursos externos</strong></h3>
                  <p class="text center">Bootstrap Jquery</p>
                  <h3 class="text center"><strong>Líder del proyecto</strong></h3>
                  <p class="text center"><a href="admin.html" data-toggle="tooltip" id="admin" title="Administrador">Gerardo Pastor</a></p>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
          </p>
        </div>
      </div>
    </div>
  </footer>
</body>
<script src="../Programs/jquery-1.8.2.min.js"></script>
<script src="../Programs/jquery.validate.js"></script>
<script src="../Programs/additional-methods.js"></script>
<script src="../Programs/registro.js"></script>
</html>
