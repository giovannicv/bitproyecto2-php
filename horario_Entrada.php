<!DOCTYPE html>
<html lang="en">
<head>
<title>INICIO</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">
	.bg, .box2 {behavior:url(js/PIE.htc)}
</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode">
		<img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
	</div>
<![endif]-->
</head>

<body id="page1">
	<div class="body1">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
					<nav>
						<ul id="menu">
							<li><a href="INICIO.php">INICIO</a>
								<ul id="menu">
									<li><a href="horario_Entrada.php">HORARIO DE ENTRADA</a></li>
									
								</ul>
							</li>
							<li><a href="REGISTRO.php">REGISTRO</a></li>
							<li><a href="REPORTES.php">REPORTES</a></li>
							<li><a href="LINKS.php">LINKS</a></li>
							<li class="end"><a href="CONTACTOS.php">CONTACTOS</a></li>
						</ul>
					</nav>
					<ul id="icon">
						<li><a href="#"><img src="images/icon1.jpg" alt=""></a></li>
						<li><a href="#"><img src="images/icon2.jpg" alt=""></a></li>
						<li><a href="#"><img src="images/icon3.jpg" alt=""></a></li>
					</ul>
				</div>
				<div class="wrapper">
					<ul class="banners">
					<li><a href="#"><img src="images/logo1.png" alt=""></a></li>
					</ul>
				</div>
				<div id="slogan">
					"HORARIO<span>DE ENTRADA"</span>
				</div>
				<div id="content">
					<form action="horario_Entrada.php" method="POST">
						<label>ID:</label>
						<input type="text" name="ID" size="40"><br><br>
						<button id="slideupBtn" type="submit" name="BtnENVIAR" value="ENVIAR">ENVIAR</button>
					</form>
					<br><br><br>
					<a href="consulta.php">Listar Usuarios</a>
				</div>
			</header><div class="ic">More Website Templates at TemplateMonster.com!</div>
<!-- / header -->
		</div>
	</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
<?php
	include("/conexion/conexion.php");
	if(@$_POST['BtnENVIAR']){
	$var1=$_POST["ID"];
	echo '<div id="slideDiv">'.'<h1>El HORARIO ENTRADA FUE REGISTRADA</h1>'.'</div>';
	?>
	<script src='funciones.js'>
	 	$(document).ready(function(){
			$("#slideupBtn").click(function () {
	   			$("#slideDiv").slideDown(2000);
       			$("#slideDiv").delay(1000);
	   			$("#slideDiv").slideUp(2000);
			});
		});
	 	</script>
	<?php
	$query=OCIParse($conn, "begin entrada_usuario(:dato1);end;");
	OCIBindByName($query, ":dato1",$var1);
	OCIExecute($query, OCI_DEFAULT);
	OCICommit($conn);
	OCILogoff($conn);
	}
?>
</html>
