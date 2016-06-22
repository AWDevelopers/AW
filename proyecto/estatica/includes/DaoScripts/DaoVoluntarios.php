﻿<?php
	require_once '/../ModelScripts/Voluntarios.php';
	require_once '/../config.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	class DaoVoluntarios{

		function listaVoluntarios($dniUsuario){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$array = new ArrayObject();
			$sql = "SELECT * FROM voluntarios WHERE DNIUsuario = '$dniUsuario'";
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				$con->close();
				return ($lista);	
			}
		}

		function insertaVoluntario($idProyecto,$dniUsuario,$dia,$horaEntrada,$horaSalida){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "INSERT INTO voluntarios(idProyecto, DNIUsuario, dia, horaEntrada, horaSalida) VALUES ";
			$sql.= "('".$idProyecto."', '".$dniUsuario."', '".$dia."', '".$horaEntrada."', '".$horaSalida."')";
			$con->query($sql) or die ($con->error);
			$num = $con->insert_id;
			$con->close();
			return ($num);
		}

		function borraVoluntario($idVol){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "DELETE FROM voluntarios WHERE idVoluntariado = '$idVol'";
			$con->query($sql) or die ($con->error);
			$con->close();
		}

		function modificarHoraEntrada($horaEntrada, $idVol){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE FROM voluntarios SET (horaEntrada = '$horaEntrada') WHERE idVoluntariado = '$idVol'";
			$con->query($sql) or die ($con->error);
			$con->close();
		}

		function modificarHoraSalida($horaSalida, $idVol){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE FROM voluntarios SET (horaSalida = '$horaSalida') WHERE idVoluntariado = '$idVol'";
			$con->query($sql) or die ($con->error);
			$con->close();
		}

		function modificarDia($dia, $idVol){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE FROM voluntarios SET (dia = '$dia') WHERE idVoluntariado = '$idVol'";
			$con->query($sql) or die ($con->error);
			$con->close();
		}

	}

?>