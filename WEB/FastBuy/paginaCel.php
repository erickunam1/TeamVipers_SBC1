<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sección de Celulares</title>
<link rel="stylesheet" href="css/estilospag.css" />


</head>

<body>
<header>
		<div class="contenedor">
			<div class="logo">
				<img src="img/logo_estirado.png">
			</div>
			
		</div>
	</header>

	<div class="navegacion">
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="#">Nosotros</a>
				<ul>
					<li><a href="#">Misión</a></li>
					<li><a href="#">Visión</a></li>
					<li><a href="#">Valores</a></li>
				</ul>
				</li>
				<li><a href="#">Departamentos</a>
				<ul>	
					<li><a href="paginaCel.php">Celulares</a></li>
					<li><a href="paginaPan.php">Pantallas</a></li>
					<li><a href="#">Laptops</a></li>
				</ul>
				</li>
				<li><a href="#">Promociones</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
		</nav>
	</div>

	<h2 id="Titulo">Celulares</h2>
 <?php
 	include("ConexionCel.php");
	
	
	?>

    
</body>
</html>