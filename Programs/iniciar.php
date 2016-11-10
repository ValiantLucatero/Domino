<?php
  echo'
  <html>
<head>
  <title>
    Registro
  </title>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../Programs/jquery-1.8.2.min.js"></script>
  <script src="../Programs/jquery.validate.js"></script>
  <script src="../Programs/additional-methods.js"></script>
  <script src="../Programs/registro.js"></script>
  <script src="../Programs/jquery.js"></script>
  <link rel="stylesheet" href="../Frameworks/BS/bootstrap.min.css"/>
  <script src="../Frameworks/BS/bootstrap.min.js"></script>
  <link rel="stylesheet/less" type="text/css" href="../Styles/dise.less"/>
  <script src="../Programs/less.min.js" type="text/javascript"></script>
</head>
<body>
  <header class="container">
    <div class="row">
      <div class="col-xs text-center">
        <h1>
          Registro
        </h1>
      </div>
    </div>
  </header>
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
    </form>
  </section>
  <section class="container">
  </section>
  <aside class="container">
  </aside>
  <footer class="container">
  </footer>

</body>
</html>';
?>
