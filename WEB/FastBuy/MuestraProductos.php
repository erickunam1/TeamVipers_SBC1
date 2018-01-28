<?php 

		
		include("Conexion.php");
		echo "<link rel='stylesheet' type='text/css' href='estilos.css'>";

		$query="SELECT * FROM PRODUCTOS";

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

				<a id="comprar" href='Comprar.php?Articulo=<?php echo  $fila['NombreProducto']; ?>'><p>Comprar</p></a>
                <br/>
                <a id="comprar" href='Comprar.php?Articulo=<?php echo  $fila['NombreProducto']; ?>'><p>Ver mas</p></a>

				<?php  

				echo "</div>";

			}


		echo "</div>";

		mysqli_free_result($resultado);
		mysqli_close($conexion);
 ?>