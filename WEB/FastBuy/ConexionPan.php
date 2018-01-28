<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" href="estilospag.css">

</head>

<body>
<?php 

		
		include("Conexion.php");
		echo "<link rel='stylesheet' type='text/css' href='estilos.css'>";

		$query="SELECT * FROM PRODUCTOS WHERE Seccion='Pantallas'";

		$resultado=mysqli_query($conexion, $query);

		echo "<div id='contenedorPro'>";

		//if(mysqli_num_rows($resultado)!=0){ 

			while($fila=mysqli_fetch_array($resultado, MYSQL_ASSOC)){

				echo "<div id='contenedorInd'>";

					echo "<img src='Imagenes/" . $fila['Imagen']. "'/  id='logo'>";
						echo "<p>Codigo: " . $fila['CodigoArticulo'] . "</p>";
					echo "<p>Nombre: " . $fila['NombreProducto'] . "</p>";
					echo "<p>Precio: " . $fila['Precio'] . "</p>";
					echo "<p>Seccion: " . $fila['Seccion'] . "</p>";
				
				
				?>

				<!--<a id="comprar" href='Comprar.php?Articulo=</body>*?php echo  $fila['NombreProducto']; ?>'><p>Añadir al Carrito</p></a>-->
                <input type="submit" name="Añadir al Carrito" id="enviar" value="Agregar">


				<?php  

				echo "</div>";

			}


		echo "</div>";

		mysqli_free_result($resultado);
		mysqli_close($conexion);
 ?>
</body>
</html>