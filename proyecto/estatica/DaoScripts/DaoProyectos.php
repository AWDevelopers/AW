<?php
	require_once '/../ModelScripts/Proyectos.php';
	require_once '/../includes/config.php';
	class DaoProyectos{

		private $array;

		function listaProyectosVoluntarios(){
			
			$array = new ArrayObject();
			$con = createConnection();
			$sql = "SELECT * FROM proyecto";
			$rs = $con->query($sql) or die ($con->error);
			/**/
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$array->append(new Proyectos($lista['idProyecto'], $lista['CIFOng'], $lista['fechaCreacion'], $lista['dineroNecesario'], $lista['dineroAcumulado'], $lista['nombre'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['imagen'], $lista['numVoluntarios']));
				}
				mysqli_free_result($rs);
				closeConnection($con);
				return ($array);
			}
		}

		function insertaProyecto($proyecto){
			$con = createConnection();
			$sql = "INSERT INTO proyecto(idProyecto, CIFOng, fechaCreacion, dineroNecesario, dineroAcumulado, nombre, descripcionLarga, descripcionCorta, imagen) VALUES ";
			$sql.= "('".$proyecto->getIdProyecto()."', '".$proyecto->getCifOng()."', '".$proyecto->getFechaCreacion()."', '".$proyecto->getDineroNecesario()."', '".$proyecto->getDineroAcumulado()."', '".$proyecto->getNombre()."', '".$proyecto->getDescripcionLarga()."', '".$proyecto->getDescripcionCorta()."', '".$proyecto->getImagen()."', '".$proyecto->getNumVoluntarios()."')";

			$con->query($sql) or die ($con->error);
			closeConnection($con);
		}

		function borraProyecto($idProyecto){
			$con = createConnection();
			$sql = "DELETE FROM proyecto WHERE idProyecto = '$idProyecto'";
			$con->query($sql) or die ($con->error);
			closeConnection($con);
		}

		function seleccionaProyecto($idProyecto){
			$con = createConnection();
			$sql = "SELECT * FROM proyecto WHERE idProyecto = '$idProyecto'";
			$rs = $con->query($sql) or die ($con->error);
			$resultado = "";
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$resultado =  new Proyectos($lista['idProyecto'], $lista['CIFOng'], $lista['fechaCreacion'], $lista['dineroNecesario'], $lista['dineroAcumulado'], $lista['nombre'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['imagen'], $lista['numVoluntarios']);
				}
				mysqli_free_result($rs);
				closeConnection($con);
				return ($resultado);
			}
		}


	}

?>