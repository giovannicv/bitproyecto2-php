<!DOCTYPE html>
<html lang="en">
<head>
<title>REPORTES</title>
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
<style type="text/css">
		fieldset{
			width: 30px;
			height: 230px;
			margin: auto;
			border-radius: 15px;
			padding: 11px;

		}
		form button[type='submit']{
			border: 1px solid #CED5D7;
			box-shadow:0 0 0 3px #EEF5F7;
			padding: 2px 6px;
			border-radius: 30px;
			font-weight: bold;
			text-shadow: 1px 1px 0px blue;
			background: #e4f3f6; 
			background: -moz-linear-gradient(top, #e4f1f6 0%, #cfe6ef 100%);
			background: -webkit-linear-gradient(top, #e4f1f6 0%,#cfe6ef 100%); 
		}
		button{
			height: 27px;
			width: 179px;
		}
		#slideDiv {
		 	 background: red;
		 	 border-radius: 10px;
		 	 height: 27px;
		 	 position: absolute;
		 	 width: 160px;
			 margin-left: 20px;
			 top:295px;
	      	 right:250px;
			}
		#slideDiv:before {
			 border-top: 11px solid transparent;
		 	 border-right: 28px solid dodgerblue;
		 	 border-bottom: 10px solid transparent;
		 	 content:"";
		 	 height: 0;
		 	 margin: 3px 0 0 -25px;
			 position: absolute;
		 	 width: 0;
			}
		h1{
		 font-size:20px;
		 margin-left: 10px;
		 margin-top: 3px ;
		 color:blue;
       }
	</style>
</head>

<body id="page5">
	<div class="body1">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
					<nav>
						<ul id="menu">
							<li><a href="INICIO.php">INICIO</a></li>
							<li><a href="REGISTRO.php">REGISTRO</a></li>
							<li><a href="REPORTES.php">REPORTES</a></li>
							<li><a href="LINKS.php">LINKS</a></li>
							<li class="end"><a href="CONTACTOS.php">CONTACTOS</a></li>
						</ul>
					</nav>
					<ul id="icons">
						<li><a href="#"><img src="images/icons1.jpg" alt=""></a></li>
						<li><a href="#"><img src="images/icons2.jpg" alt=""></a></li>
					</ul>
				</div>
				<div class="wrapper">
					<ul class="banners">
					<li><a href="#"><img src="images/logo1.png" alt=""></a></li>
					</ul>
				</div>
				<nav>
		<ul id="menu">
			<li><a href="re_doc.php">REPORTE DOCENTES</a></li>
		</ul>
		</nav>
			</header><div class="ic">More Website Templates at TemplateMonster.com!</div>
<!-- / header -->
		</div>
	</div>
<div class="body2">
		<h1>REPORTE DE DOCENTES</h1>
		<fieldset >
            <div id="formu">
            	<form action="re_doc.php" method="post" id="contacto">
	                <label>ID:</label>
	                <input type="text" name="ci" placeholder="Ci" maxlength="10"></br>
	                <button id="slideupBtn" type="submit" name="BtnENVIAR" value="ENVIAR">ENVIAR</button>
            	</form>
            </div>
            </fieldset>
	</div>
	<h1> <?php
	include("/conexion/conexion.php");
	if(@$_POST['BtnENVIAR']){
	$var1=$_POST["ci"];
	
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
	$query = OCIParse($conn, "select *from EMPLEADOS where id='$var1'");
	OCIExecute($query, OCI_DEFAULT);
	while($row=oci_fetch_array($query))
	{
		echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]; // y asi sucesivamente si tenes mas de un resultado.
	}
	OCICommit($conn);
	OCILogoff($conn);
	}
?></h1>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>