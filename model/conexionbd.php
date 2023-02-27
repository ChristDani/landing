<?php
	Class Conexion{
		public function get_conexion()
		{
			$servidor="localhost";
			$usuario="root";
			$clave="";
			$basedatos="leanding_page"; 

   
			$conexion=new PDO("mysql:host=$servidor;dbname=$basedatos;charset=UTF8",$usuario,$clave);
			return $conexion;
		}
		public function get_desconexion()
		{
			$conexion=null;
			return $conexion;
		}
	}
?>