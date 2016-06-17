<?php
	require_once '/../ModelScripts/Donaciones.php';
	require_once '/../includes/config.php';

	class DaoDonaciones{

		private $array;

		public function listaDonaciones(){
			$array = new ArrayOnject();
			$con = createConnection();
			$consulta = "SELECT * FROM donaciones";
			$resultado = $con->query($consulta) or die ($con->error);

			if($rs != NULL){
				while($lista = $resultado->fetch_assoc()){
					$array->append(new Donaciones($lista['donaciones_id'], $lista['DNIUsuario'], $lista['idProyecto'], $lista['donacion']));
				}
				mysqli_free_result($resultado);
				closeConection($con);
				return $array;
			}
		}

		public function addDonacion($donacion){
			$con = createConnection();
			//Añado la nueva donacion a la tabla donaciones
			$consulta = "INSERT INTO donaciones(DNIUsuario, idProyecto, donacion) VALUES";
			$consulta.="('".$donacion->getDniUsuario()."', '".$donacion->getProyectoId()."', '".$donacion->getDonacion()."')";
			$con->query($consulta) or die($con->error);
			//Actualizo el proyecto añadiendo la nueva donacion
			$consulta2 = "UPDATE proyecto SET dineroAcumulado = (dineroAcumulado + '".$donacion->getDonacion()."') WHERE idProyecto = '". $donacion->getProyectoId() ."'";
			$con->query($consulta2) or die($con->error);

			closeConnection($con);
		}

		public function borraDonacion($id){
			$con = createConnection();
			$consulta = "DELETE FROM donaciones WHERE idProyecto = '$id'";
			$con->query($consulta) or die ($con->error);
			closeConecction();
		}
	}
?>