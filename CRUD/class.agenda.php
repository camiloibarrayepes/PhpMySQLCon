<?php

include("conexion.php");

class Agenda{

	protected $nombre;
	protected $domicilio;
	protected $telefono;
	protected $comentario; 
	protected $id;


	public function __construct($nom, $dom, $tel, $com, $id = ''){
		$this->nombre = $nom;
		$this->domicilio = $dom;
		$this->telefono = $tel;
		$this->comentario = $com;
		$this->id = $id;
	}

	public function insert(){

		$db = new Conexion();

		$sql = "INSERT INTO `contactos`(`nombre`, `domicilio`, `telefono`, `comentario`) VALUES ('$this->nombre','$this->domicilio', '$this->telefono', '$this->comentario')";

		$db->query($sql) ? $message = "insertado" : $message = "Error";

		echo $message;

	}
}

?>