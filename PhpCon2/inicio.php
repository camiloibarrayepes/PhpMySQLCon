<?php

include("conexion.php");


class Proceso{
	private $Comunicacion;
	function Proceso(){

	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "larattel";

	$this->Comunicacion = new Conexion($server, $user, $pass, $db);
	
	if($this->Comunicacion){
		echo "bien";
		}else{
			echo "mal";
		}
	}
	
	}

	$con = new Proceso();

?>