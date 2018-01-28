<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" href="css/estilocarrito.css" />
</head>

<body>
<?php
$cod=$_GET["CodigoArticulo"];
$total = 0;
					


 


 $conexion=mysqli_connect("localhost","root","", "productostienda"); //Se hace la conexión
	//	mysqli_select_db($conexion, "productostienda"); //Se accede a la base de datos
	
  
  if(mysqli_connect_errno()){
	  echo "FALLO al conectar con la BBDD";
	  exit();
	  }
	 
	  
	  mysqli_set_charset($conexion,"utf8");
  $consulta="INSERT INTO `carrito`(`CodigoArticulo`) VALUES ('" . $cod . " ') ";
   $resultados=mysqli_query($conexion,$consulta);
 if($resultados==false){
	 echo "Error en la consulta";
	 }else{
		 echo "<div id='productos'>";
		 echo " Productos Comprados<br><br>";
		// echo "<table><tr><td>$cod</td></tr></table>";
		}
			 mysqli_set_charset($conexion,"utf8");
			$consulta2="SELECT * FROM `carrito` a JOIN `productos`b WHERE a.CodigoArticulo=b.CodigoArticulo";             $resultados2=mysqli_query($conexion,$consulta2);
			  while($fila=mysqli_fetch_array($resultados2, MYSQL_ASSOC)){
  echo $fila['NombreProducto'].      "         "  ;
  echo $fila['Precio'] . " <br>" ;
  			    }
			 

  echo "</div>";
 
echo"<div id='botones'>";
?>
<a href="PaginaCel.php">Continuar Comprando</a>
<a href="Carrito1.php?CodigoArticulo=$cod&code=true">Finalizar</a> <br>
<?

?>
 <div id="total">
			<tr>
					<td colspan="5" align="right">Total: 
					<?php 
					mysqli_set_charset($conexion,"utf8"); 
					$consulta3="SELECT  sum(Precio) as total  FROM `productos` a JOIN carrito b WHERE a.CodigoArticulo=b.CodigoArticulo";
					$resultados3=mysqli_query($conexion,$consulta3);
					while($fila=mysqli_fetch_array($resultados3, MYSQL_ASSOC)){
						$total = $fila['total'];
  echo $fila['total'] ;
  			    }
					
						
     

				
			
			
			
mysqli_close($conexion);			
				?>	
                  </div>
                </div>;
                <?php
				
				if(isset($_GET['code'])){
					//Agregamos la libreria para genera códigos QR
	require "phpqrcode/qrlib.php";

	//Declaramos una carpeta temporal para guardar la imagenes generadas
	$dir = 'temp/';
	$num = rand(0,100000);

	//Si no existe la carpeta la creamos
	if (!file_exists($dir))
        mkdir($dir);

        //Declaramos la ruta y nombre del archivo a generar
	$filename = $dir. ''.$num.'.png';

        //Parametros de Condiguración

	$tamaño = 10; //Tamaño de Pixel
	$level = 'L'; //Precisión Baja
	$framSize = 3; //Tamaño en blanco
	$contenido = $num . ";113182302;" . $total ; //Texto

        //Enviamos los parametros a la Función para generar código QR
	QRcode::png($contenido, $filename, $level, $tamaño, $framSize);

        //Mostramos la imagen generada
	echo '<img src="'.($filename).'" /><hr/>';
				}
				
				?>

</body>
</html>