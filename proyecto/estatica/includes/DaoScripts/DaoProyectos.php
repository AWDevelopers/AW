<?php
	require_once '/../ModelScripts/Proyectos.php';
	require_once '/../config.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	class DaoProyectos{

		private $array;

		function listaProyectosVoluntarios(){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "SELECT * FROM proyecto";
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				$con->close();
				return ($lista);
			}
		}

		function insertaProyecto($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen, $numVoluntarios,$dineroAcumulado){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "INSERT INTO proyecto(CIFOng, fechaCreacion, dineroNecesario, dineroAcumulado, nombre, descripcionLarga, descripcionCorta, imagen, numVoluntarios) VALUES ";
			$sql.= "('".$cif."', sysdate() , '".$dineroNecesario."', '".$dineroAcumulado."', '".$nombre."', '".$descripcionLarga."', '".$descripcionCorta."', '".$imagen."', '".$numVoluntarios."')";
			$con->query($sql) or die ($con->error);
			$num = $con->insert_id;
			$con->close();
			return ($num);
		}

		function borraProyecto($idProyecto){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "DELETE FROM proyecto WHERE idProyecto = '$idProyecto'";
			$con->query($sql) or die ($con->error);
			$con->close();
		}

		function seleccionaProyecto($idProyecto){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "SELECT * FROM proyecto WHERE idProyecto = '$idProyecto'";
			$rs = $con->query($sql) or die ($con->error);
			$resultado = "";
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$resultado =  new Proyectos($lista['idProyecto'], $lista['CIFOng'], $lista['fechaCreacion'], $lista['dineroNecesario'], $lista['dineroAcumulado'], $lista['nombre'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['imagen'], $lista['numVoluntarios']);
				}
				$rs->free();
				$con->close();
				return ($resultado);
			}
		}


	}

?>