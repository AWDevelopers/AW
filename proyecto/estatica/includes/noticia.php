<?php
class noticia{
	private $id;
	private $titulo;
	private $tipo;
	private $descripcionCorta;
	private $descripcionLarga;
	private $fecha;
	
	/*Constructora de la clase por defecto*/
	function __construct($id, $titulo, $tipo, $descripcionCorta, $descripcionLarga, $fecha){
			$this->id=$id;
			$this->titulo=$titulo;  
			$this->tipo=$tipo;
	   		$this->descripcionCorta=$descripcionCorta; 
			$this->descripcionLarga=$descripcionLarga; 
			$this->fecha=$fecha;
	}
	
	public function getTitulo(){
		return $this->titulo;
	}
	
	public function getTipo(){
		return $this->tipo;
	}
	
	public function getDescripcionCorta(){
		return $this->descripcionCorta;
	}
	
	public function getDescripcionLarga(){
		return $this->descripcionLarga;
	}
	
	public function getFecha(){
		return $this->fecha;
	}
	
	public function addNoticia($mysqli){
		$consulta = "INSERT INTO noticia (id,titulo,tipo,descripcionCorta,descripcionLarga,fecha) VALUES ('$this->id','$this->titulo', '$this->tipo', '$this->descripcionCorta', '$this->descripcionLarga', '$this->fecha')";
		$resultado=mysqli_query($mysqli,$consulta);
	}
	
	public function mostrarNoticiasPrimarias(){
		$consulta = "SELECT titulo, tipo, descripcionCorta, descripcionLarga, fecha FROM noticia WHERE tipo='PRIMARIA'";
		$resultado = mysqli_query($consulta);
		return $resultado;
	}
}
?>
