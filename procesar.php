<!DOCTYPE html>
<html>
<head>
	<title>Procesar</title>
</head>
<body>
	<?php
		class Proceso{
			private $Comunicacion;
			function Proceso(){
				
				include("conexion.php");
				//recibo variables
				$server = $_POST['servidor'];
				$user = $_POST['usuario'];
				$pass = $_POST['pass'];
				$bd = $_POST['bd'];
				if(isset($_POST['sql']))
				{
				$sql = $_POST['sql'];
				}

				$this->Comunicacion = new Conexion($server, $user, $pass, $bd);
				
			}

		}

		$con = new Proceso();

	?>
</body>
</html>

