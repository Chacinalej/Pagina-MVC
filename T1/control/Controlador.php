<?php
	
	class miController {
		
		public function __construct(){
			require_once "modelo/Model.php";
		}
		
		public function index(){
			
			
			$usuarios = new Model();
			$data["titulo"] = "Usuarios";
			$data["usuarios"] = $usuarios->get_user();
			
			require_once "vista/lista.php";	
		}
				
		public function guarda(){
			
			$ced = $_POST['ced'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$usuario = $_POST['usuario'];
			$clave = $_POST['clave'];
			$fecha = $_POST['fecha'];
			
			$usuarios = new Model();
			$usuarios->insertar($ced, $nombre, $apellido, $usuario, $clave, $fecha);
			$data["titulo"] = "Usuarios";
			$this->index();
		}

    }
?>