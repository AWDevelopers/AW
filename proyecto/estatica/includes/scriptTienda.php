<<<<<<< HEAD
<?php 
	
	class tienda{
		private $listaProductos;
		private $contador;

		public function tienda(){
			$this->contador = 0;			
		}

		public function getNombreProductos($i){
			return $this->listaProductos[$i]->getNombreProducto();
		}
		public function getPrecioProductos($i){
			return $this->listaProductos[$i]->getPrecioProducto();
		}
		public function getStockProductos($i){
			return $this->listaProductos[$i]->getStockProducto();
		}
		public function getNombreONGProductos($i){
			return $this->listaProductos[$i]->getNombreONGProducto();
		
		}
		public function getContador(){
			return $this->contador;
		}
		

		public function cargarDatosTienda(){
			include 'includes/config.php';
			include 'includes/scriptProducto.php';

			$sqlProductos = "SELECT * FROM producto";
			if($result = $connection->query($sqlProductos )){
				
				$nFilas = $result->num_rows;
				$this->contador = $nFilas;
				$result->close();
			}
			
			

			for($i = 1; $i <= $this->contador; $i++){
				$this->listaProductos[$i] = new producto($i);
				$this->listaProductos[$i]->cargarDatosProducto();
				
			}
		

		}

	}

?>
=======
<!DOCTYPE html>
<html>
	<head>
		<title>Tienda - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $urlAbsoluta ?>css/estilos.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $urlAbsoluta ?>css/colorsandtext.css"/>

		<!--<link rel="stylesheet" type="text/css" href="css/tienda.css">-->
	</head>
	<body>
		<?php 
			
			class tienda{
				private $nombre ;
				private $precio;
				private $stock;
				private $nombreONG;
				private $descLarga;
				private $descCorta;
				private $id;
				private $contador;
				
				public function getNombreProductos($i){
					return $this->nombre[$i];
				}
				public function getIdProductos($i){
					return $this->id[$i];
				}
				public function getPrecioProductos($i){
					return $this->precio[$i];
				}
				public function getStockProductos($i){
					return $this->stock[$i];
				}
				public function getNombreONGProductos($i){
					return $this->nombreONG[$i];
				}
				public function getDescLargaProductos($i){
					return $this->descLarga[$i];
				}
				public function getDescCortaProductos($i){
					return $this->descCorta[$i];
				}
				public function getContador(){
					return $this->contador;
				}
				function tienda(){
					$this->contador = 0;
				}

				public function insertaProductosTienda(){
					include('includes/config.php');	
					$contador = 0;
				$query_SacarProductos = 'SELECT * FROM producto ORDER BY nombre';
				$SacarProductos = mysqli_query($connection, $query_SacarProductos);
				$n = mysqli_num_rows($SacarProductos);

				if($n > 0){
					$row_SacarProductos = mysqli_fetch_assoc($SacarProductos);

					do {
						
						$this->nombre[$this->contador] = $row_SacarProductos['nombre'];
						$this->id[$this->contador] = $row_SacarProductos['idProducto'];
						$this->precio[$this->contador] = $row_SacarProductos['precio'];
						$this->stock[$this->contador] = $row_SacarProductos['stock'];
						$nombreOngDelProducto = $row_SacarProductos['CIFOng'];

						$query_SacarCif = "SELECT nombre FROM ong WHERE  CIF = $nombreOngDelProducto";
						$SacarCif = mysqli_query($connection, $query_SacarCif);
						$row_SacarCif = mysqli_fetch_assoc($SacarCif);
						$this->nombreONG[$this->contador] = $row_SacarCif['nombre'];
						
						$this->contador++;
						
					} while ($row_SacarProductos = mysqli_fetch_assoc($SacarProductos)); 
					$n = $contador; 
				}
			
			}
		}
		?>
	</body>
</html>	
>>>>>>> 109e44bd479a187b14b5082585673df1351d378e
