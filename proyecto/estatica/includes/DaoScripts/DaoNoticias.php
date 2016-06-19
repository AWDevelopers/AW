<?php
	require_once '/../ModelScripts/noticia.php';
	//require_once '/../includes/config.php';
        use \AW\proyecto\estatica\includes\Aplicacion as App;
	class DaoNoticias{
		private $array;
		
		function listaNoticias(){
			$app = App::getSingleton();
                        $con = $app->conexionBd();
			$sql = sprintf("SELECT * FROM noticia");
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL)
			{
                            while($lista[] = $rs->fetch_assoc());
				$rs->free();
				$con->close();
				return ($lista);
			}
		}

		function listaNoticiasPrimarias(){
			$app = App::getSingleton();
                        $con = $app->conexionBd();
			$sql = sprintf("SELECT * FROM noticia WHERE tipo='%s'", mysql_real_escape_string('primaria'));
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL)
			{
                            while($lista[] = $rs->fetch_assoc());
				$rs->free();
				$con->close();
				return ($lista);
			}
		}
		
		function listaNoticiasSecundarias(){
			$app = App::getSingleton();
                        $con = $app->conexionBd();
			$sql = sprintf("SELECT * FROM noticia WHERE tipo='%s'", mysql_real_escape_string('secundaria'));
			$rs = $con->query($sql) or die ($con->error);
			/**/
			if($rs != NULL)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				$con->close();
				return ($lista);
			}
		}
		
		function listaNoticiasTerciarias(){
			$app = App::getSingleton();
                        $con = $app->conexionBd();
			$sql = sprintf("SELECT * FROM noticia WHERE tipo='%s'", mysql_real_escape_string('terciaria'));
			$rs = $con->query($sql) or die ($con->error);
			/**/
			if($rs != NULL)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				$con->close();
				return ($lista);
			}
		}
		
		function listaNoticiasOtras(){
			$app = App::getSingleton();
                        $con = $app->conexionBd();
			$sql = sprintf("SELECT * FROM noticia WHERE tipo='%s'", mysql_real_escape_string('otras'));
			$rs = $con->query($sql) or die ($con->error);
			/**/
			if($rs != NULL)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				$con->close();
				return ($lista);
			}
		}
		
		
		function insertaNoticia($titulo, $tipo , $descripcionCorta, $descripcionLarga, $imagen, $fecha){
                        $app = App::getSingleton();
                        $con = $app->conexionBd();
			$sql = "INSERT INTO noticia (titulo,tipo,descripcionCorta,descripcionLarga,fecha) VALUES ";
			$sql.= "('".$titulo."', '".$tipo."', '".$desripcionCorta."', '".$descripcionLarga."', '".$fecha."', '".$imagen."')";
			$con->query($sql) or die ($con->error);
                        $num = $con->insert_id;
			$con->close();
			return ($num);
        
		}
                
                function existeNoticia($titulo){
                    $app = App::getSingleton();
                    $con = $app->conexionBd();
                    $sql = sprintf("SELECT * FROM noticia WHERE titulo='%s'", mysql_real_escape_string($titulo));
                    $rs = $con->query($sql) or die ($con->error);
                    $num = $rs->num_rows;
                    $con->close();
                    return $num;        
                }
		
		function eliminaNoticia($idNoticia){
			$app = App::getSingleton();
                        $con = $app->conexionBd();
			$sql = "DELETE FROM noticia WHERE id = '$idNoticia'";
			$con->query($sql) or die ($con->error);
                        $con->close();
		}
		
		function seleccionaNoticia($id){
			$app = App::getSingleton();
                        $con = $app->conexionBd();
                        $sql = sprintf("SELECT * FROM noticia WHERE id='%s'", mysql_real_escape_string($id));
			$rs = $con->query($sql) or die ($con->error);
			$resultado = "";
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$resultado =  new Noticia($lista['id'], $lista['titulo'], $lista['tipo'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['fecha'], $lista['imagen']);
				}
				$rs->free();
                                $con->close();
				return ($resultado);
			}
		}
		
		
	}
?>	

