<?php
	require_once '/../ModelScripts/Producto.php';
	require_once '/../config.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;

	class DaoProductos{
		
		private $listaProductos;


		function cargarDatosProductoPorNombre(){

			$app = App::getSingleton();
    		$connection = $app->conexionBd();
			$sql = "SELECT * FROM Producto ORDER BY nombre ";
			$rs = $connection->query($sql) or die ($connection->error);


			if($rs != NULL){
				while($lista[] = $rs->fetch_assoc());

					$rs->free();
					$connection->close();
					return ($lista);	
			}
			
		}

		function cargarNombreONG($CIFOng){

			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "SELECT nombre FROM ong WHERE CIF = '$CIFOng'";
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL)
			{
				while($nombre = $rs->fetch_assoc());
				$rs->free();
				$con->close();
				return ($nombre);
			}
		}

	

		function cargarDatosProductoPorPrecioMayor(){

			$app = App::getSingleton();
    		$connection = $app->conexionBd();
			$sql = "SELECT * FROM Producto ORDER BY precio desc ";
			$rs = $connection->query($sql) or die ($connection->error);


			if($rs != NULL){
				while($lista[] = $rs->fetch_assoc());

					$rs->free();
					$connection->close();
					return ($lista);	
			}
			
		
		}

		function cargarDatosProductoPorPrecioMenor(){

			$app = App::getSingleton();
    		$connection = $app->conexionBd();
			$sql = "SELECT * FROM Producto ORDER BY precio asc ";
			$rs = $connection->query($sql) or die ($connection->error);


			if($rs != NULL){
				while($lista[] = $rs->fetch_assoc());

					$rs->free();
					$connection->close();
					return ($lista);	
			}
			
		
		}

		function cargaProducto($idProducto){
			
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "SELECT * FROM producto WHERE idProducto = '$idProducto'";
			$rs = $con->query($sql) or die ($con->error);
			$resultado = "";
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$resultado =  new Producto($lista['idProducto'], $lista['CIFOng'],$lista['stock'],$lista['precio'],$lista['nombre'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['imagen']);
				}
				$rs->free();
				$con->close();
				return ($resultado);
			}
		}

		function insertaProducto($idProducto, $nombreOng, $stock, $precio, $nombre,$descripcionCorta, $descripcionLarga, $imagen){
			$app = App::getSingleton();
    		$con = $app->conexionBd();

    		$CIFOng = $_SESSION['DNI'];
    		$sql = "INSERT INTO producto(idProducto, stock, precio, nombre,descripcionCorta, descripcionLarga, CIFOng, imagen) VALUES ";
			$sql.= "(,". $stock.",". $precio.",". $nombre.",".$descripcionCorta.",". $descripcionLarga.",". $CIFOng.",". $imagen.")";
			$con->query($sql) or die ($con->error);
			$num = $con->insert_id;
			$con->close();
			return ($num);
		}

		function borrarProducto($id){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "DELETE FROM producto WHERE idProducto = '$id'";
			$con->query($sql) or die ($con->error);
			$con->close();
		}
 	}

 ?>