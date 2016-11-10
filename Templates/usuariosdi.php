<!DOCTYPE html>
<html>
	<head>
		<title>Dibujo Constructivo</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet"/>
		<link rel="stylesheet/less" type="text/css" href="../Styles/dise.less"/>
							<script src="../Frameworks/BS/bootstrap.js"></script>
							<script src="../Programs/less.min.js"></script>
	</head>
<?php
$nombre=$_POST['usuario'];
$cad1="Alma";
$cad2="Diana";
if(!empty($nombre))
{
	if(strcmp ($nombre,$cad1)==0 || strcmp($nombre,$cad2)==0)
{ echo'

		<body>
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
					          				  <li><a href="Inicio.html"><em>Inicio</em></a></li>
										  <li><a href="Multimedia.php"><em>Multimedia</em></a></li>
										  <li><a href="contacto.html"><em>Fechas de Entrega</em></a></li>
										  <li><a href="contacto.html"><em>Avisos</em></a></li>
										  <li><a href="colores.html" ><em>Cambio</em></a></li>
					       				</ul>
	                      					</div>
	                   				 </div>
	                  			</div>
	               			 </header>
	              		</div>
			</div>
			<section>
				<div id="prim" class="container">
					<div id="prim" class=" jumbotron">
						<h1 class="text-center">Dibujo Constructivo</h1><br/>
						<div class="row">
							<div class="col-xs-8 col-md-push-1">
								<img src="../img/uno.jpg" class="img-rounded" width="500px"/>
							</div>
							<div class="col-xs-4">
								<blockquote class="text-justify">
										Este espacio fue creado de alumnos para alumnos con la intención de ayudarte 										a tener menos preocupaciones con la materia de dibujo y para que te dejes de
										jalar los cabellos por no saber qué hacer.

								</blockquote>
								<nav id="navi">
									<ul class="nav nav-stacked nav-pills">
										<li><a href="#Ase">Horario de asesorías</a></li>
										<li><a href="#Com">Comentarios</a></li>
										<li><a href="#Uni">Ejemplos de cada unidad</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</section><br/>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<section id="Ase">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 text-center">
										<br/><div class="panel panel-default miu">
											<div class="panel-body">
												<h2 class="text-center">Horario de asesorías</h2>
											</div>
										</div>
								</div>
								<div class="container">
									<div class="row">
										<div class="col-md-5 col-md-offset-2 text-center ">
											<table class="table table-hover" id="tab">
												<thead>
													<tr class="info">
														<td><b>Día</b></td>
														<td><b>Hora</b></td>
														<td><b>Salón</b></td>
													</tr>
												</thead>
												<tbody >
													<tr>
														<td><b>Lunes</b></td>
														<td>8:40-9:30</td>
														<td>H-4</td>
													</tr>
													<tr>
														<td><b>Martes</b></td>
														<td>8:40-9:30</td>
														<td>H-4</td>
													</tr>
													<tr>
														<td><b>Miércoles</b></td>
														<td>8:40-9:30</td>
														<td>H-4</td>
													</tr>
													<tr>
														<td><b>Jueves</b></td>
														<td>12:50-1:40</td>
														<td>H-4</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div><br/>
							</div>
						</section><br/>
						<section id="Uni">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center">
									<div class="text-justify dos">
										<br/><div class="panel panel-default miu">
											<div class="panel-body">
												<h2 class="text-center miu">Comentarios o Preguntas</h2>
											</div>
										</div>
										<form class="text-center">
											Nombre:<br/><input type="text"><br/><br/>
											Correo:<br/><input type="text"><br/><br/>
											Comentario o Pregunta: <br/><textarea></textarea><br/><br/>
										</form>
									</div>
								</div>
							</div>
						</section><br/>
						<section id="Com">
							<div class="container">
							  	<ul class="nav nav-tabs">
								    	<li class="active"><a data-toggle="tab" href="#un">Unidad I</a></li>
								    	<li><a data-toggle="tab" href="#du">Unidad II</a></li>
								    	<li><a data-toggle="tab" href="#tru">Unidad III</a></li>
								    	<li><a data-toggle="tab" href="#cut">Unidad IV</a></li>
									<li><a data-toggle="tab" href="#bib">Bibliografía</a></li>
								 </ul>
								  <div class="tab-content">
								    	<div id="un" class="tab-pane fade in active mau text-justify">
								      		<h2>Tecnología básica del dibujo geométrico</h2>
								      		<div>
											COSAS
										</div>
								    	</div>
									<div id="du" class="tab-pane fade mau text-justify">
								     		 <h2>Tecnología básica del dibujo constructivo</h2>
								     		 <div>
											COSAS
										</div>
								    	</div>
								    	<div id="tru" class="tab-pane fade mau text-justify">
								      			<h2>Simbología y problemas específicos para el área Físico 										Matemáticas. Introducción a las proyecciones cónicas o perspectivas</h2>
								      			<div>
												COSAS
											</div>
								    	</div>
							    		<div id="cut" class="tab-pane fade mau text-justify">
							      			<h2>Tecnología especializada del dibujo aplicado a la representación de 										proyecciones de edificaciones.</h2>
							      			<div>
											COSAS
										</div>
							    		</div>
									<div id="bib" class="tab-pane fade mau text-justify">
							      			<h2>Bibliografía Recomendada</h2>
							      			<div>
											COSAS
										</div>
							    		</div>
							  	</div>
							</div>
						</section><br/>
					</div>
					<div class="col-md-3" >
						<aside id="pop">
						<div id="popi">
							<br/><h3 class="text-center" id="his"><strong>Proximas entregas</strong></h3><br/>
							<img src="img/popu.jpg" class="center-block" width = "200px"/><br/>
							<div class="panel panel-default">
								<div class="panel-heading"><b>14 de noviembre</b></div>
									<div class="panel-body">
										<p>Maqueta de prisma hexagonal</p>
							  	</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading"><b>27 de noviembre</b></div>
									<div class="panel-body">
										<p>Entrega de la infografía</p>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading"><b>Marzo</b></div>
									<div class="panel-body">
										<p>Maqueta de trabajo final</p>
								</div>
							</div>
						</div>
						</aside>
					</div>
				</div>
			</div>';
		}
	}
	else{
		echo'
		<body>
				<div class="container">
					<div class="row">
						<p><lead>Usuario no registrado</lead></p>
						<a href="inicio.html">Regresar</a>
					</div>
				</div>
			';
	}
	?>



	            <p>







			<footer class="text center">
				<div class="container-fluid">
					<div  class="panel panel-default">
						<div id="uno" class="panel-body">
	        					<a class="up-arrow" href="#" data-toggle="tooltip" title="TO TOP">
				       			<span class="glyphicon glyphicon-chevron-up"></span>
	        					<div class="row">
	          						<div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
									<p id="cont" class="text-center">
										Corina número 3, Colonia Del Carmen, Delegación Coyoacán, C.P. 014100, CDMX 										Universidad Nacional Autónoma de México (UNAM). Hecho en México.Esta página 										puede ser reproducida con fines no lucrativos, siempre y cuando no se 										mutile, se cite la fuente completa y su dirección electrónica.
									</p>
									<div id="c">Créditos</div>
	              							<div class="modal fade" id="creditos" role="dialog">
	                							<div class="modal-content">
	                 							 <button type="button" class="close" data_dimiss="modal">&times;</button>
	                  								<h2 class="modal-title text center"><strong>Créditos</strong></h2>
											<div class="modal-body">
	                  									<div class="text-justify blockquote">
	                   									 	<h3 class="text center"><strong>Programación, Diseño 													y Desarrollo Web</strong></h3>
	                   										 <p class="text center">Alumnos de la Escuela 													Nacional Preparatoria</p>
	                    										<h3 class="text center"><strong>Líder del 													proyecto </strong></h3>
	                    										<p class="text center"><a href="admin.html" 													data-toggle="tooltip" id="admin" 													title="Administrador">Gerardo Pastor</a></p>
	                   										 <h3 class="text center"><strong>Recursos 													externos</strong></h3>
	                    										<p class="text center">Bootstrap Jquery</p>
	                 									 </div>
												<div class="modal-footer">
							              					<button type="button" class="btn btn-default" 													data-dismiss="modal">Cerrar</button>
	                									</div>
					      						</div>
	            								</div>
	          							</div>
	        						</div>
	     						 </div>
						</div>
					</div>
				</div>
			</footer>

			<script src="../Programs/jquery-2.2.3.js"></script>
			<script src="../js/bootstrap.min.js"></script>
			<script>
				function getCookie(cname) {
				    var name = cname + "=";
				    var ca = document.cookie.split(';');
				    for(var i=0; i<ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0)==' ') {
					    c = c.substring(1);
					}
					if (c.indexOf(name) == 0) {
					    return c.substring(name.length, c.length);
					}
				    }
				    return "";
				}
				window.onload = function(){
				var color=getCookie("color");
				if(color!="")
					less.modifyVars({
						'@colcon':color
					});
				else
					less.modifyVars({
						'@colcon':'#006699'
					});
				};
				less.refreshStyles();
			</script>
		</body>
	</html>';
