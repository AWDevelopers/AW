<?php

        class NoticiasVista{	
            private $ListaNoticias;
            private $dao;
            function __construct(){
			require_once '/../ModelScripts/GestorNoticias.php';
            require_once '/../DaoScripts/DaoNoticias.php';
			$this->ListaNoticias = new GestorNoticias();
            $this->dao= new DaoNoticias();
            }
            
            
            function muestraNoticia($id){		
				$noticia= $this->ListaNoticias->getNoticia($id);
				$titulo = $noticia->getTitulo();
				$fecha = $noticia->getFecha();
                $imagen =  $noticia->getImagen();
                $des = $noticia->getDescripcionLarga();
                 $html = <<<EOS
        
		
					<div class="contenido">
				
						<div id= "tituloNoticia">
							<h1> $titulo </h1>
						</div>
						<div class = "imgYdescrip">
							<p><img src= "$imagen" /></p>
							<p> $fecha </p>
							<p>$des</p>
						</div>
						
						
					</div>
EOS;
                    echo $html;  	

            }
        
            function muestraNoticiasPrimarias(){
                $lista = $this->ListaNoticias->getListaNoticiasPrimarias();
                $iterator = $lista->getIterator();
                
		
		while($iterator->valid()) {
                    $titulo = $iterator->current()->getTitulo();
                    $imagen = $iterator->current()->getImagen();
                    $desCorta = $iterator->current()->getDescripcionCorta();
                    $id = $iterator->current()->getId();
                    $html = <<<EOS
		  		<div class='principal'>
                                    <h2> $titulo </h2>
                                    <img src="$imagen"/>
                                    <p> $desCorta </p>
                                    <form name="vista" action="includes/formMuestraNoticia.php" method="POST">
                                            <input type="hidden" name="id" id="noticia" value="$id" /> 
                                            <input name="button" type="submit" value="Seguir Leyendo" />
                                    </form>
                                </div>
EOS;
                    echo $html;  		
		    $iterator->next();
		}	 	
            }
	
            function muestraNoticiasSecundarias(){
                $lista = $this->ListaNoticias->getListaNoticiasSecundarias();
                $iterator = $lista->getIterator();
		
		while($iterator->valid()) {
                    $titulo = $iterator->current()->getTitulo();
                    $imagen = $iterator->current()->getImagen();
                    $desCorta = $iterator->current()->getDescripcionCorta();
                    $id = $iterator->current()->getId();
                    $html = <<<EOS
		  		<div class='secundaria'>
                                    <h3> $titulo </h3>
                                    <img src="$imagen"/>
                                    <p> $desCorta </p>
                                    <form name="vista" action="includes/formMuestraNotcia.php" method="POST">
                                            <input type="hidden" name="id" id="noticia" value="$id" /> 
                                            <input name="button" type="submit" value="Seguir Leyendo" />
                                    </form>
                                </div>
EOS;
                    echo $html;  		
		    $iterator->next();
		}	
            }
	
            function muestraNoticiasTerciarias(){
                $lista = $this->ListaNoticias->getListaNoticiasTerciarias();
                $iterator = $lista->getIterator();
                
		
		while($iterator->valid()) {
                    $titulo = $iterator->current()->getTitulo();
                    $imagen = $iterator->current()->getImagen();
                    $desCorta = $iterator->current()->getDescripcionCorta();
                    $id = $iterator->current()->getId();
                    $html = <<<EOS
		  		<div class='terciaria'>
                                    <h4> $titulo </h4>
                                    <img src="$imagen"/>
                                    <p> $desCorta </p>
                                    <form name="vista" action="includes/formMuestraNoticia.php" method="POST">
                                            <input type="hidden" name="id" id="noticia" value="$id" /> 
                                            <input name="button" type="submit" value="Seguir Leyendo" />
                                    </form>
                                </div>
EOS;
                    echo $html;  		
		    $iterator->next();
		}
            }
	
            function muestraNoticiasOtras(){
                $lista = $this->ListaNoticias->getListaNoticiasOtras();
                $iterator = $lista->getIterator();
		
		while($iterator->valid()) {
                    $titulo = $iterator->current()->getTitulo();
                    $imagen = $iterator->current()->getImagen();
                    $desCorta = $iterator->current()->getDescripcionCorta();
                    $id = $iterator->current()->getId();
                    $html = <<<EOS
                                    <h5> $titulo </h5>
                                    <img src="$imagen"/>
                                    <p> $desCorta </p>
                                    <form name="vista" action="includes/formMuestraNoticia.php" method="POST">
                                            <input type="hidden" name="id" id="noticia" value="$id" /> 
                                            <input name="button" type="submit" value="Seguir Leyendo" />
                                    </form>
EOS;
                    echo $html;  		
		    $iterator->next();
		}

            
        } 

            function muestraNoticiasAdmin(){
				
                $lista = $this->ListaNoticias->getListaNoticias();
                $iterator = $lista->getIterator();
                
        
                while($iterator->valid()) {
                    $titulo = $iterator->current()->getTitulo();
                    $des = $iterator->current()->getDescripcionCorta();
                    $id = $iterator->current()->getId();
                    $html = <<<EOS
                                    <div class="noticiaAdmin">
                                    <h3> $titulo </h3>
                                    <p> $des </p> 
                                    <form name="eliminar" action="includes/formProcesaEliminarNoticia.php" method="POST">
										<input type="hidden" name="id" id="noticia" value="$id" /> 
                                        <input type="button" onclick="alert('Estas seguro que desea eliminar la noticia')" value="eliminar"></input>
                                    </form>
                                    </div>
EOS;
                    echo $html;     
                    $iterator->next();
                }
            } 

}   
?>
