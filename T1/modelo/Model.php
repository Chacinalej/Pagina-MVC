<?php
	
	class Model {
		
		private $db;
		private $usuarios;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->usuarios = array();
		}
		///Para sellecionar usuarios///
		public function get_user()
		{
			$sql = "SELECT * FROM usuarios";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->usuarios[] = $row;
			}
			return $this->usuarios;
		}
		
		public function insertar($ced, $nombre, $apellido, $usuario, $clave, $fecha){
			
			$resultado = $this->db->query("INSERT INTO usuarios (ced, nombre, apellido, usuario, clave, fecha) VALUES ('$ced', '$nombre', '$apellido', '$usuario', '$clave', '$fecha')");
			
		}
	} 
?>