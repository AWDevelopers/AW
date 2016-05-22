<<<<<<< HEAD
<?php
	
	class Producto{
		private $idProducto;
		private $stock;
		private $precio;
		private $nombre;
		private $descripcionCorta;
		private $descripcionLarga;
		private $nombreOng;
		private $rutaImagen;

		public function Producto($id){
			$this->idProducto = $id;
		}

		public function getNombreProducto(){
			return $this->nombre;
		}
		public function getPrecioProducto(){
			return $this->precio;
		}
		public function getstockProducto(){
			return $this->stock;
		}
		public function getNombreONGProducto(){
			return $this->nombreOng;
		}
		public function getDescLargaProducto(){
			return $this->descripcionLarga;
		}
		public function getDescCortaProducto(){
			return $this->descripcionCorta;
		}
		public function getRutaImagen(){
			print $this->rutaImagen;
		}


		private function cargarNombreONG($cifOng){
			include 'includes/config.php';
			$sqlONG = "SELECT nombre FROM ong WHERE CIF = $cifOng";
			$consultaONG= $connection->query($sqlONG);

			if(!$consultaONG || $consultaONG->num_rows === 0){
				echo "Se ha producido un error con, inténtalo más tarde.";
				exit;
			}
			
			
			$datosONG = $consultaONG->fetch_assoc();

			return $datosONG['nombre'];
		}

		public function cargarDatosProducto(){
			include 'includes/config.php';

			$sqlProducto = "SELECT * FROM Producto WHERE idProducto = $this->idProducto";
			$consultaProducto = $connection->query($sqlProducto);

			if(!$consultaProducto|| $consultaProducto->num_rows === 0){
				echo "Se ha producido un error con productos, inténtalo más tarde.";
				exit;
			}
			$datosProducto = $consultaProducto->fetch_assoc();
			
			$this->stock = $datosProducto['stock'];
			$this->precio = $datosProducto['precio'];
			$this->nombre = $datosProducto['nombre'];
			$this->descripcionCorta = $datosProducto['descripcionCorta'];
			$this->descripcionLarga = $datosProducto['descripcionLarga'];
			$this->rutaImagen = $datosProducto['imagen'];
			$this->nombreOng = $this->cargarNombreONG($datosProducto['CIFOng']);
		}

	}


?>
=======

<!DOCTYPE html>
<html>
	<head>
		<title>Producto - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $urlAbsoluta ?>css/estilos.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $urlAbsoluta ?>css/colorsandtext.css"/>
	</head>
	<body>
		
		<!--CONTENIDO-->
		<div id="contenido">
			<?php 
			class producto{
				private $nombre ;
				private $precio;
				private $stock;
				private $nombreONG;
				private $descLarga;
				private $descCorta;
				private $id;
				function producto(){
					$this->nombre = '';
					$this->precio = '';
					$this->stock = '';
					$this->nombreONG = '';
					$this->descLarga = '';
					$this->descCorta = '';
				}

				public function getNombreProducto(){
					return $this->nombre;
				}
				public function getPrecioProducto(){
					return $this->precio;
				}
				public function getstockProducto(){
					return $this->stock;
				}
				public function getNombreONGProducto(){
					return $this->nombreONG;
				}
				public function getDescLargaProducto(){
					return $this->descLarga;
				}
				public function getDescCortaProducto(){
					return $this->descCorta;
				}

				//Consultar la url para obtener la id del producto
			

				public function almacenarProductos(){
					include('includes/config.php');
					
					//Obtenemos la id del producto de la url

					$query_SacarUrl = sprintf("SELECT producto.idProducto FROM producto WHERE producto.idProducto = '%s'", $_GET['producto']);
					$SacarUrl = mysqli_query( $connection, $query_SacarUrl) ;
					$row_SacarUrl = mysqli_fetch_assoc($SacarUrl);
					
					//Almacenamos la id
					$idDelProducto = $row_SacarUrl['idProducto'];

					//Obtenemos todos los datos del producto seleccionado de la tabla
					$query_SacarElProducto = sprintf("SELECT * FROM producto WHERE idProducto = '%s'", $_GET['producto'],'int');
					$SacarElProducto = mysqli_query($connection, $query_SacarElProducto) ;
					$row_SacarElProducto = mysqli_fetch_assoc($SacarElProducto);
					$totalRows_SacarElProducto = mysqli_num_rows($SacarElProducto);

					//Almacenamos el Cif de la ONG del producto
					$cifProducto = $row_SacarElProducto['CIFOng'];

					//Sacar el nombre de la ong a la que le pertenece el producto
					
					$query_SacarNombreONG = sprintf("SELECT nombre FROM ong WHERE CIF = '%s'", $cifProducto,'int');
					$SacarNombreONG = mysqli_query($connection, $query_SacarNombreONG);
					$row_SacarNombreONG = mysqli_fetch_assoc($SacarNombreONG);
					$totalRows_SacarNombreONG = mysqli_num_rows($SacarNombreONG);

					//Almacenamos los datos
					$this->nombre = $row_SacarElProducto['nombre'];
					$this->descLarga = $row_SacarElProducto['descripcionLarga'];
					$this->descCorta= $row_SacarElProducto['descripcionCorta'];	
					$this->precio = $row_SacarElProducto['precio'];
					$this->stock = $row_SacarElProducto['stock'];
					$this->nombreOng = $row_SacarNombreONG['nombre'];
				}
			}

			?>

		</div>
	</body>
</html>

>>>>>>> 109e44bd479a187b14b5082585673df1351d378e
