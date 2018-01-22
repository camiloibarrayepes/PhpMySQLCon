<?php 
/*Conexión a Base de Datos con POO*/

	class Conexion{
		private $servidor;
		private $usuario;
		private $password;
		private $bd;
		private $conectar;

		function Conexion($s, $u, $p, $b){
			$this->servidor = $s;
			$this->usuario = $u;
			$this->password = $p;
			$this->bd = $b;
			$this->ConectarMysql();
			$this->seleccionBD();

		}

		private function ConectarMysql(){
			$this->conectar = mysqli_connect($this->servidor, 
				$this->usuario, 
				$this->password);

		}

		private function seleccionBD(){
			mysqli_select_db($this->conectar, $this->bd);

			if($this->conectar){
				echo "good";
			}else{
				echo "bad";
			}

		}




		
	}
?>