<?php
	

	public class DaoVoluntario{

		public function listaProyectosVoluntarios(){
			require_once(INCLUDE.'/config.php'); 
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