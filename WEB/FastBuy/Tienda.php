<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tienda en linea</title>
<link rel="stylesheet" href="estilos.css">

</head>

<body>

<header>
  		<div class="contenedor">
  		 <div class="logo">
  				<img src="logo.png">
  				
  			</div><!--.contenedor-->
  			
  		</div>
  	</header>
  	<div class="navegacion">
  	<nav>
  		<ul class="clearfix">
  			<li><a href="#">Inicio</a></li>
  			<li><a href="#">Descuentos</a></li>
  			<li><a href="#">Mas Productos</a></li>
  			<li><a href="#">Carrito</a></li>
  			<li><a href="#">Otras Tiendas</a></li>
  		</ul>




  		</div>
  	</header>
    <?php
	include("MuestraProductos.php");
	?>
    
</body>
</html>