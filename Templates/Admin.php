<?php
	echo '<!DOCTYPE html>
				<html>
					<head>
						<meta charset="UTF-8">
						<title>Administración</title>
						<link rel="stylesheet" type="text/css" href="../Styles/BS/bootstrap.css"/>
						<link rel="stylesheet/less" type="text/css" href="../Styles/Estilo.less"/>
					</head>
					<body id="body">
							<script src="../Styles/jquery-2.2.3.js"></script>
							<script src="../Styles/BS/bootstrap.js"></script>
							<script src="../Styles/less.min.js"></script>
							<div id="div" class="container">
								<div class="row">
									<header>
										<!--cosa de alma-->
										<input type="color" class="form-control" id="col">
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
									<div id="diva" class="col-xs-2 avisos">Avisos</div>
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
?>
