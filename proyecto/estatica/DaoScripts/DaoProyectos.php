<?php

	class DaoProyectos{

		private $array;

		function listaProyectosVoluntarios(){
			require_once '/../ModelScripts/Proyectos.php';
			$array = new ArrayObject();
			$con = createConnection();
			$sql = "SELECT * FROM proyecto";
			$rs = $con->query($sql) or die ($con->error);
			/**/
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$array->append(new Proyectos($lista['idProyecto'], $lista['CIFOng'], $lista['fechaCreacion'], $lista['dineroNecesario'], $lista['dineroAcumulado'], $lista['nombre'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['imagen']));
				}
				closeConnection($con);
				return ($array);
			}
		}


	}

?>