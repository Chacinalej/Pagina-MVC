<?php
	
	class Model {
		
		private $db;
		private $usuarios;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->usuarios = array();
		}
		
		public function get_users()
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

		public function modificar($ced, $nombre, $apellido, $usuario, $clave, $fecha){
			
			$resultado = $this->db->query("UPDATE usuarios SET nombre='$nombre', apellido='$apellido', usuario='$usuario', clave='$clave', fecha='$fecha' WHERE ced = '$ced'");			
		}
		
		public function eliminar($ced){
			
			$resultado = $this->db->query("DELETE FROM usuarios WHERE ced = '$ced'");
			
		}

		public function get_user($ced)
		{
			$sql = "SELECT * FROM usuarios WHERE ced='$ced' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>