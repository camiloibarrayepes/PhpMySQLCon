<?php

class Conexion extends mysqli{

	private $DBHOST = 'localhost';
	private $DBUSER = 'root';
	private $DBPASS = '';
	private $DBNAME = 'pruebaphp';

	public function __construct(){
		parent:: __construct($this->DBHOST, $this->DBUSER, $this->DBPASS, $this->DBNAME);

		$this->set_charset('utf-8');

		$this->connect_errno ? die('Error en la conexión'. mysqli_connect_errno()) : $m = 'Conectado<br>';

		echo $m;
	}
}

?>