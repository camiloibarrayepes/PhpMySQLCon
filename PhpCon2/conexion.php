<?php


class conexion{
        
        public function Conexion ($dbhost, $dbuser, $dbpass, $dbname){
            $this->db = new mysqli( $dbhost, $dbuser, $dbpass, $dbname );
            if($this->db->connect_errno){
                trigger_error(" Fallo la conexión con MySQL, Tipo de error -> ({$this->db->connect_error})", E_USER_ERROR);
            }

            
        }
    }

?>