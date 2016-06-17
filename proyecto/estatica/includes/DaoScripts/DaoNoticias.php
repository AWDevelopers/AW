<<<<<<< HEAD:proyecto/estatica/includes/DaoScripts/DaoNoticias.php
<?php
	require_once '/../ModelScripts/noticia.php';
	require_once '/../includes/config.php';
	class DaoNoticias{
		private $array;
		
		function listaNoticiasPrimarias(){
			$array = new ArrayObject();
			$con = createConnection();
			$sql = "SELECT * FROM proyecto WHERE tipo='primaria'";
			$rs = $con->query($sql) or die ($con->error);
			/**/
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$array->append(new Noticia($lista['id'], $lista['titulo'], $lista['tipo'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['fecha'], $lista['imagen']));
				}
				mysqli_free_result($rs);
				closeConnection($con);
				return ($array);
			}
		}
		
		function listaNoticiasSecundarias(){
			$array = new ArrayObject();
			$con = createConnection();
			$sql = "SELECT * FROM proyecto WHERE tipo='secundaria'";
			$rs = $con->query($sql) or die ($con->error);
			/**/
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$array->append(new Noticia($lista['id'], $lista['titulo'], $lista['tipo'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['fecha'],$lista['imagen']));
				}
				mysqli_free_result($rs);
				closeConnection($con);
				return ($array);
			}
		}
		
		function listaNoticiasTerciarias(){
			$array = new ArrayObject();
			$con = createConnection();
			$sql = "SELECT * FROM proyecto WHERE tipo='terciaria'";
			$rs = $con->query($sql) or die ($con->error);
			/**/
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$array->append(new Noticia($lista['id'], $lista['titulo'], $lista['tipo'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['fecha'], $lista['imagen']));
				}
				mysqli_free_result($rs);
				closeConnection($con);
				return ($array);
			}
		}
		
		function listaNoticiasOtras(){
			$array = new ArrayObject();
			$con = createConnection();
			$sql = "SELECT * FROM proyecto WHERE tipo='otras'";
			$rs = $con->query($sql) or die ($con->error);
			/**/
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$array->append(new Noticia($lista['id'], $lista['titulo'], $lista['tipo'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['fecha'], $lista['imagen']));
				}
				mysqli_free_result($rs);
				closeConnection($con);
				return ($array);
			}
		}
		
		function insertaNoticia($noticia){
			$con = createConnection();
			$sql = "INSERT INTO noticia (id,titulo,tipo,descripcionCorta,descripcionLarga,fecha) VALUES ";
			$sql.= "('".$noticia->getId()."', '".$noticia->getTitulo()."', '".$noticia->getTipo()."', '".$noticia->getDescripcionCorta()."', '".$noticia->getDescripcionLarga()."', '".$noticia->getFecha()."', '".$noticia->getImagen()."')";
			$con->query($sql) or die ($con->error);
			closeConnection($con);
		}
		
		function eliminaNoticia($idNoticia){
			$con = createConnection();
			$sql = "DELETE FROM noticia WHERE id = '$idNoticia'";
			$con->query($sql) or die ($con->error);
			closeConnection($con);
		}
		
		
	}
?>	
=======
<?php
	require_once '/../ModelScripts/noticia.php';
	require_once '/../includes/config.php';
	class DaoNoticias{
		private $array;
		
		function listaNoticiasPrimarias(){
			$array = new ArrayObject();
			$con = createConnection();
			$sql = sprintf("SELECT * FROM noticia WHERE tipo='%s'", mysql_real_escape_string('primaria'));
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL)
			{
                            
				while($lista = $rs->fetch_assoc()){
					$array->append(new Noticia($lista['id'], $lista['titulo'], $lista['tipo'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['fecha'], $lista['imagen']));
				}
				mysqli_free_result($rs);
				closeConnection($con);
				return ($array);
			}
		}
		
		function listaNoticiasSecundarias(){
			$array = new ArrayObject();
			$con = createConnection();
			$sql = sprintf("SELECT * FROM noticia WHERE tipo='%s'", mysql_real_escape_string('secundaria'));
			$rs = $con->query($sql) or die ($con->error);
			/**/
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$array->append(new Noticia($lista['id'], $lista['titulo'], $lista['tipo'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['fecha'],$lista['imagen']));
				}
				mysqli_free_result($rs);
				closeConnection($con);
				return ($array);
			}
		}
		
		function listaNoticiasTerciarias(){
			$array = new ArrayObject();
			$con = createConnection();
			$sql = sprintf("SELECT * FROM noticia WHERE tipo='%s'", mysql_real_escape_string('terciaria'));
			$rs = $con->query($sql) or die ($con->error);
			/**/
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$array->append(new Noticia($lista['id'], $lista['titulo'], $lista['tipo'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['fecha'], $lista['imagen']));
				}
				mysqli_free_result($rs);
				closeConnection($con);
				return ($array);
			}
		}
		
		function listaNoticiasOtras(){
			$array = new ArrayObject();
			$con = createConnection();
			$sql = sprintf("SELECT * FROM noticia WHERE tipo='%s'", mysql_real_escape_string('otras'));
			$rs = $con->query($sql) or die ($con->error);
			/**/
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$array->append(new Noticia($lista['id'], $lista['titulo'], $lista['tipo'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['fecha'], $lista['imagen']));
				}
				mysqli_free_result($rs);
				closeConnection($con);
				return ($array);
			}
		}
		
		
		function insertaNoticia($noticia){
			$con = createConnection();
			$sql = "INSERT INTO noticia (id,titulo,tipo,descripcionCorta,descripcionLarga,fecha) VALUES ";
			$sql.= "('".$noticia->getId()."', '".$noticia->getTitulo()."', '".$noticia->getTipo()."', '".$noticia->getDescripcionCorta()."', '".$noticia->getDescripcionLarga()."', '".$noticia->getFecha()."', '".$noticia->getImagen()."')";
			$con->query($sql) or die ($con->error);
			closeConnection($con);
		}
		
		function eliminaNoticia($idNoticia){
			$con = createConnection();
			$sql = "DELETE FROM noticia WHERE id = '$idNoticia'";
			$con->query($sql) or die ($con->error);
			closeConnection($con);
		}
		
		function seleccionaNoticia($id){
			$con = createConnection();
                        $sql = sprintf("SELECT * FROM noticia WHERE id='%s'", mysql_real_escape_string($id));
			$rs = $con->query($sql) or die ($con->error);
			$resultado = "";
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$resultado =  new Noticia($lista['id'], $lista['titulo'], $lista['tipo'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['fecha'], $lista['imagen']);
				}
				mysqli_free_result($rs);
				closeConnection($con);
				return ($resultado);
			}
		}
		
		
	}
?>	
>>>>>>> 66658948511fe9aadb10506acf1f68f7b9dac667:proyecto/estatica/DaoScripts/DaoNoticias.php
