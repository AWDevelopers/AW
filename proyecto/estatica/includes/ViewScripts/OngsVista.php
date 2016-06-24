<?php

	use \AW\proyecto\estatica\includes\Aplicacion as App;

	class vistaOng{

		private $listaOngs;
		
		function  __construct(){
			require_once '/../ModelScripts/GestorOngs.php';
			$this->listaOngs = new GestorOngs();
		}
	
		public function cambiaTlf(){
			if(isset($_POST['cTelefono'])){
				$nueva=$_POST["telefono_actual"];
				$actual=$_POST["telefono_nuevo"];

				$lista = $this->listaOngs->modificaTelefono($actual, $nueva);
				header("Location: procesarModificacion.php");
			}
			
		}
	
		public function muestraModificarTelefono($telefono){

			echo '<div class="formulario">';
			echo '<form method="POST">
				  <p>Teléfono ACTUAL de la Ong
					<input type="text" name="telefono_actual" required value = "'. $telefono .'"></input></p>
				  <p>Teléfono NUEVO de la Ong
					<input type="text" name="telefono_nuevo" required></input></p>
				  <p><input type="submit" name="cTelefono" value="Modificar Teléfono"></p>
				  </form>';
			echo '</div>';
			$this->cambiaTlf();
			
		}
		
		public function cambiaNombre(){
			if(isset($_POST['cNombre'])){
				$actual=$_POST["nombre_actual"];
				$nuevo=$_POST["nombre_nuevo"];

				$lista = $this->listaOngs->modificaNombre($nuevo, $actual);
				header("Location: procesarModificacion.php");
			}
			
		}

		public function muestraModificarNombre($nombre){

			echo '<div class="formulario">';
			echo '<form method="POST">
				  <p>Nombre ACTUAL de la Ong
					<input type="text" name="nombre_actual" required value = "'. $nombre .'"></input></p>
				  <p>Nombre NUEVO de la Ong
					<input type="text" name="nombre_nuevo" required></input></p>
				  <p><input type="submit" name="cNombre" value="Modificar Nombre"></p>
				  </form>';
			echo '</div>';
			$this->cambiaNombre();
		}


		public function cambiaEmail(){
			if(isset($_POST['cEmail'])){
				$actual=$_POST["email_actual"];
				$nuevo=$_POST["email_nuevo"];

				$lista = $this->listaOngs->modificaMail($nuevo, $actual);
				header("Location: procesarModificacion.php");
			}
			
		}

		public function muestraModificarEmail($email){

			echo '<div class="formulario">';
			echo '<form  method="POST">
				  <p>Email ACTUAL de la Ong
					<input type="text" name="email_actual" required value = "'. $email .'"></input></p>
				  <p>Email NUEVO de la Ong
					<input type="text" name="email_nuevo" required></input></p>
				  <p><input type="submit" name="cEmail" value="Modificar Email"></p>
				  </form>';
			echo '</div>';
			$this->cambiaEmail();
		}

		public function cambiaDireccion(){
			if(isset($_POST['cDir'])){
				$nuevo=$_POST["dir_nuevo"];
				$actual=$_POST["dir_actual"];

				$lista = $this->listaOngs->modificaDir($nuevo, $actual);
				header("Location: procesarModificacion.php");
			}
			
		}
		public function muestraModificarDireccionOng($dir){

			echo '<div class="formulario">';
			echo '<form  method="POST">
				  <p>Dirección ACTUAL de la Ong
					<input type="text" name="dir_actual" required value = "'. $dir .'"></input></p>
				  <p>Dirección NUEVO de la Ong
					<input type="text" name="dir_nuevo" required></input></p>
				  <p><input type="submit" name="cDir" value="Modificar Dirección"></p>
				  </form>';
			echo '</div>';
			$this->cambiaDireccion();
		}



		public function cambiaUsuario(){
			if(isset($_POST['cUsuario'])){
				$actual=$_POST["usuario_actual"];
				$nuevo=$_POST["usuario_nuevo"];

				$lista = $this->listaOngs->modificaUsuario($nuevo, $actual);
				header("Location: procesarModificacion.php");
			}
			
		}
		
		public function muestraModificarUsuario($usuario){

			echo '<div class="formulario">';
			echo '<form  method="POST">
				  <p>Usuario ACTUAL de la Ong
					<input type="text" name="usuario_actual" required value = "'. $usuario .'"></input></p>
				  <p>Usuario NUEVO de la Ong
					<input type="text" name="usuario_nuevo" required></input></p>
				  <p><input type="submit" name="cUsuario" value="Modificar Usuario"></p>
				  </form>';
			echo '</div>';
			$this->cambiaUsuario();
		}

		public function cambiaPass(){
			if(isset($_POST['cPass'])){
				$actual=$_POST["pass_actual"];
				$nuevo=$_POST["pass_nuevo"];

				$lista = $this->listaOngs->modificaPass($nuevo, $actual);
				header("Location: procesarModificacion.php");
			}
			
		}
		

		public function muestraModificarPass(){

			echo '<div class="formulario">';
			echo '<form  method="POST">
				  <p>Contraseña ACTUAL de la Ong
					<input type="text" name="pass_actual" required></input></p>
				  <p>Contarseña NUEVO de la Ong
					<input type="text" name="pass_nuevo" required></input></p>
				  <p><input type="submit" name="cPass" value="Modificar Contraseña"></p>
				  </form>';
			echo '</div>';
			$this->cambiaPass();
		}

		public function muestraEliminarOng($id){

			echo '<div class="formulario">';
			echo '<form  action="includes/formOng.php" method="POST">
				  <p>¿Está seguro de que quiere dar de baja la Ong? </p>
				  <p><input type="hidden" name="cif" required value = '.$id.'></input></p>
				  <p>
				  <input type="submit" name="submit" value="Cancelar">
				  <input type="submit" name="submit" value="Dar de baja Ong">
				  </p>
				  </form>';
			echo '</div>';
		}

		public function eliminarOng($CIF){
			$lista = $this->listaOngs->deleteOng($CIF);
		}
		public function muestraInsertarOng(){

			echo '<div class="formulario">';
			echo '<form action="includes/formOng.php" method="POST">
				  <p>CIF de la Ong
				  	<input type="text" name="CIF" required></input></p>
				  <p>Nombre de la Ong
				  	<input type="text" name="nombre" required></input></p>
				  <p>Dirección
				  	<input type="text" name="direccion"></input> </p>
				  <p>Email de contacto
					<input type="text" name="email" required></input></p>
				  <p>Usuario
					<input type="text" name="usuario" required></input></p>
				  <p>Contraseña
					<input type="text" name="pass" required></input></p>
				  <p>Teléfono de contacto
					<input type="text" name="telefono"></input></p>
				  <p><input type="submit" name="submit" value="Dar de alta Ong"></p>
				  </form>';
			echo '</div>';
		}

		public function muestraPerfilOng($ong){

			$lista = $this->listaOngs->seleccionaOng($ong);
			$nombre=$lista->getNombre();
			$cif=$lista->getCif();
			$dir=$lista->getDireccion();
			$email=$lista->getEmail();
			$user=$lista->getUsuario();
			$tlf=$lista->getTelefono();

			$imagen= $lista->getImagen();
			echo '<div id= "contenido">';
			echo '<div id="datosOng">';
				echo '<p><strong>Nombre de la Ong:</strong>' . $nombre;
				//if((isset($_SESSION['login'])&& $_SESSION['usuario'] == $user)){
				$app = App::getSingleton();
    			if($app->usuarioLogueado() && $app->nombreUsuario()==$user){
					echo ' ----- <a href="vistaModificarNombreOng.php?data='. $nombre . '"> Modificar </a></p>';
				}
				echo '<p><strong>CIF de la Ong:</strong>' . $cif;
				
				echo '<p><strong>Dirección de la Ong:</strong>' . $dir;
				//if((isset($_SESSION['login'])&& $_SESSION['usuario'] == $user)){
				if($app->usuarioLogueado() && $app->nombreUsuario()==$user){
					echo ' ----- <a href="vistaModificarDireccionOng.php?data='. $dir . '"> Modificar </a></p>';
				}
				echo '<p><strong>Email de la Ong:</strong>' . $email;
				//if((isset($_SESSION['login'])&& $_SESSION['usuario'] == $user)){
				if($app->usuarioLogueado() && $app->nombreUsuario()==$user){
					echo ' ----- <a href="vistaModificarEmailOng.php?data='. $email . '"> Modificar </a></p>';
				}
				echo '<p><strong>Teléfono de la Ong:</strong>' . $tlf;
				//if((isset($_SESSION['login'])&& $_SESSION['usuario'] == $user)){
				if($app->usuarioLogueado() && $app->nombreUsuario()==$user){
					echo ' ----- <a href="vistaModificarTelefonoOng.php?data='. $tlf . '"> Modificar </a></p>';
				}
				//if((isset($_SESSION['login'])&&$_SESSION['usuario'] == $user)){
				if($app->usuarioLogueado() && $app->nombreUsuario()==$user){
					echo '<p><strong>Usuario de la Ong: </strong>' . $user . ' ----- <a href="vistaModificarUsuarioOng.php?data='. $user . '">    Modificar </a></p> ';
					echo '<p><strong>Contraseña de la Ong: </strong> ************ ----- <a href="vistaModificarPassOng.php?data='. $cif . '">    Modificar </a></p> ';
				}
					echo '<form action="vistaEliminarOng.php?CIF='.$cif.'" method="POST">
      				<input type="hidden" name="CIF" value="$cif"><input type ="submit" name="eliminar" value="Eliminar Ong" size="30"></form>';
				//}
				echo '<div id = "imagenDonacion">

  				<p><img src="'.$imagen.'" /></p>
  				</div>';
  				echo '</div>';	
			echo '</div>';
		}
	}

?>