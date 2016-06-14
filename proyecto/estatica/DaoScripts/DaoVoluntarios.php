<?php
	

	class DaoVoluntarios{

		function listaProyectosVoluntarios(){
			$con = createConnection();
			$sql = "SELECT idProyecto, nombre, imagen FROM proyecto";
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL)
			{
				while($row[] = $rs->fetch_assoc());
				closeConnection($con);
				return ($row);
			}
		}

	}

?>