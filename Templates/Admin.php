
	echo '<!DOCTYPE html>
				<html>
					<head>
						<meta charset="UTF-8">
						<link rel="shortcut icon" href="../Resources/logo.png" type="image/png"/>
						<title>Administración</title>
						<link rel="stylesheet" type="text/css" href="../Frameworks/BS/bootstrap.css"/>
						<link rel="stylesheet/less" type="text/css" href="../Styles/Estilo.less"/>
					</head>
					<body id="body">
							<script src="../Programs/jquery-2.2.3.js"></script>
							<script src="../Frameworks/BS/bootstrap.js"></script>
							<script src="../Programs/less.min.js"></script>
							<div id="div" class="container">
								<div class="row">
									<header id="main_header">
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
	                        <img class="responsive" width="8%" alt="Brand" src="../Resources/logo.png">
	                        <img class="responsive" width="8%" alt="Brand" src="../Resources/nombre.png">
	                      </div>
	                      <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse" id="nav_collapse">
	                        <ul id="nav-main" class="nav navbar-nav navbar-rigth">
	                          <li><a href="Admin.php"><em>Inicio</em></a></li>
	                          <li><a href="Multimedia.php"><em>Multimedia</em></a></li>
	                          <li><a href="contacto.html"><em>Fechas de Entrega</em></a></li>
	                          <li><a href="contacto.html"><em>Avisos</em></a></li>
	                          <li><a href="contacto.html"><em>Bibliografía</em></a></li>
	                          <li><input type="color" class="form-control" id="col"><em>Cambio</em></li>
	                        </ul>
	                      </div>
	                    </div>
	                  </div>
	                </header>
								</div>
								<div class="row">
									<h1>Hola Gerardo</h1>
								</div>
								<div class="row">
									<!--<div class="col-md-2"></div>-->
							  	<div class="col-xs-8">
										<img src="../Resources/Horario.jpg"/>
									</div>
									<div id="diva" class="col-xs-2">Avisos esperando ajx.</div>
								</div>
									<footer>
									</footer>
							</div>
							<script>
								document.getElementsByTagName("input")[0].onchange=function()
								{
									var col=document.getElementsByTagName("input")[0].value;
									less.modifyVars({"@col":col});
									document.cookie=col;
									less.refreshStyles();
								};
								if(typeof(document.cookie)!="undefined")
								{
									less.modifyVars({"@col":document.cookie});
									less.refreshStyles();
								}
							</script>
					</body>
				</html>'
<?php?>
