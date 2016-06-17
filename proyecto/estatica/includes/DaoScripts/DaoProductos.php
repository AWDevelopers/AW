<?php
	require_once '/../ModelScripts/Producto.php';
	require_once '/../includes/config.php';

	class DaoProductos{
		
		private $listaProductos;

		function cargarNombreONG($cifOng){

			$connection = createConnection();
			$sqlONG = "SELECT nombre FROM ong WHERE CIF = $cifOng";
			$consultaONG= $connection->query($sqlONG);

			if(!$consultaONG || $consultaONG->num_rows === 0){
				echo "Se ha producido un error con, inténtalo más tarde.";
				exit;
			}
			
			
			$datosONG = $consultaONG->fetch_assoc();
			mysqli_free_result($consultaONG);
			closeConnection($connection);

			return $datosONG['nombre'];
		}

		function cargarDatosProductoPorNombre(){

			$listaProductos = new ArrayObject();
			$connection = createConnection();

			$sqlProducto = "SELECT * FROM Producto ORDER BY nombre ";
			$rs = $connection->query($sqlProducto);



			while($lista = $rs->fetch_assoc()){

				$nombreONG = $this->cargarNombreONG($lista['CIFOng']);
				$listaProductos->append(new Producto($lista['idProducto'],$nombreONG, $lista['stock'], $lista['precio'], $lista['nombre'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['imagen']));
			}
				
			
			mysqli_free_result($rs);
			closeConnection($connection);
			return ($listaProductos);
		}

		function cargarDatosProductoPorPrecioMayor(){

			$listaProductos = new ArrayObject();
			$connection = createConnection();

			$sqlProducto = "SELECT * FROM Producto ORDER BY precio DESC ";
			$rs = $connection->query($sqlProducto);



			while($lista = $rs->fetch_assoc()){

				$nombreONG = $this->cargarNombreONG($lista['CIFOng']);
				$listaProductos->append(new Producto($lista['idProducto'],$nombreONG, $lista['stock'], $lista['precio'], $lista['nombre'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['imagen']));
			}
				
			
			mysqli_free_result($rs);
			closeConnection($connection);
			return ($listaProductos);
		}

		function cargarDatosProductoPorPrecioMenor(){

			$listaProductos = new ArrayObject();
			$connection = createConnection();

			$sqlProducto = "SELECT * FROM Producto ORDER BY precio ASC ";
			$rs = $connection->query($sqlProducto);



			while($lista = $rs->fetch_assoc()){

				$nombreONG = $this->cargarNombreONG($lista['CIFOng']);
				$listaProductos->append(new Producto($lista['idProducto'],$nombreONG, $lista['stock'], $lista['precio'], $lista['nombre'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['imagen']));
			}
				
			
			mysqli_free_result($rs);
			closeConnection($connection);
			return ($listaProductos);
		}

		function cargaProducto($idProducto){
			
			$con = createConnection();
			$sql = "SELECT * FROM producto WHERE idProducto = '$idProducto'";
			$rs = $con->query($sql) or die ($con->error);
			$resultado = "";
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$nombreONG = $this->cargarNombreONG($lista['CIFOng']);
					$resultado =  new Producto($lista['idProducto'],$nombreONG, $lista['stock'], $lista['precio'], $lista['nombre'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['imagen']);
				}
				mysqli_free_result($rs);
				closeConnection($con);
			
			}
			return ($resultado);
		}

 	}

 ?>