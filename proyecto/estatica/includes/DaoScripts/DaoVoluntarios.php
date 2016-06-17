<?php
	require_once '/../ModelScripts/Voluntarios.php';

	class DaoVoluntarios{

		private $array;
		function listaVoluntarios($dniUsuario){

			$con = createConnection();
			$array = new ArrayObject();
			$sql = "SELECT * FROM voluntarios WHERE DNIUsuario = '$dniUsuario'";
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL)
			{
				while($row = $rs->fetch_assoc()){
					$array->append(new voluntario($lista['idProyecto'], $lista['DNIUsuario'], $lista['dia'], $lista['horaEntrada'], $lista['horaSalida']));
				}
				mysqli_free_result($rs);
				closeConnection($con);
				return ($array);
			}
		}

	}

?>