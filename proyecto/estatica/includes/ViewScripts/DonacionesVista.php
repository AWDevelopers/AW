<?php

	class vistaDonaciones{
		private $ListaProyectos;

		function __construct(){
			require_once '/../ModelScripts/GestorProyectos.php';
			$this->ListaProyectos = new GestorProyectos();
		}

		function muestraDonacionesProyecto($id){

			$lista = $this->ListaProyectos->getProyecto($id);

			
			  	$nombre =  $lista->getNombre();
				$imagen = $lista->getImagen();
				$id = $lista->getIdProyecto();
				$dineroAcumulado =  $lista->getDineroAcumulado();
				$CIFOng = $lista->getCifOng();
				$dineroNecesario =  $lista->getDineroNecesario();
				$descLarga =  $lista->getDescripcionLarga();
				$descCorta = $lista->getDescripcionCorta();

	 			$html = <<<EOS
					<div class="contenido">
				
						<div id = 'fundacion'>
							
							<h1 align="center"><a href="perfilOng.php?ong=$CIFOng">'$nombre'</a></h1>'
						</div>
						<div id = 'imagenONG'>
							<center>
							<!--<p><img src="img/panda.png" width="600" /></p>-->
							<p><img src= "$imagen" /></p>
							<h4>$descCorta</h4>
							
							<!--<p>Aqui ira la descripcion de la ONG</p>-->
							<p>$descLarga</p>
							</center>
						</div>
						<div id = "datos">
						<div id = "recaudado">
							
							<div id="recaudacion">Recaudacion: $dineroAcumulado euros   ----   Meta: $dineroNecesario euros</div>
							<div id = "barrainformativa">
								<p><progress value="$dineroAcumulado" max="$dineroNecesario"></progress></p>
							</div>
						</div>
						<div id = "datoscantidad">
							<div id= "cantidad"> Cantidad:</div>
								<form action="vistaDonacion.php?idProyect" method="POST">
									<p><input type="text" name="cantidad">
									<input type="hidden" name="idProyect" value="$id">
									<input type= "submit" name ="donar" value = "Donar" size="20">
									</p>
								</form>
							</div>
						</div>
					</div>
EOS;
				echo $html;  		
				
		}

/*


*/


		public function muestraInsertarDonacion($id, $dinero){

			if(!(isset($_SESSION['login']) && $_SESSION['login'])){
				echo '<div class="formulario">';
				echo '<form action="includes/formDonacion.php" method="POST">
					  <p>Dni:
					  <input type="text" name="dni" required></input></p>
					  <p>Proyecto(id):
					  <input type="text" name="pid" required value = "' . $id . '"></input></p>
					  <p>Cantidad a donar:
					  <input type="text" name="cantidad" required value="' . $dinero . '"></input></p>
					  <p><input type="submit" name="donacion" value="Hacer Donación"></input></p></form>';
				echo '</div>';
			}else{
				echo '<h2>Usuario no logueado !</h2>';
				echo '<p>Para realizar una donación debes estar <a href="registrate.php">registrado</a> o <a href="login.php">logueado</a>.</p>';
			}
		}
	}

?>