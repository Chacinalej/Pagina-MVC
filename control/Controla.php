<?php
	
	class ControlaController {
		
		public function __construct(){
			require_once "modelo/Model.php";
		}
		
		public function index(){
			
			
			$usuarios = new Model();
			$data["titulo"] = "Usuarios";
			$data["usuarios"] = $usuarios->get_users();
			
			require_once "vista/lista.php";	
		}

		public function nuevo(){
			
			$data["titulo"] = "Vehiculos";
			require_once "vista/nuevo.php";
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

		public function modificar($ced){
			
			$usuarios = new Model();
			
			$data["ced"] = $ced;
			$data["usuarios"] = $usuarios->get_user($ced);
			$data["titulo"] = "Usuarios";
			require_once "vista/cambiar.php";
		}
		
		public function actualizar(){

			$ced = $_POST['ced'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$usuario = $_POST['usuario'];
			$clave = $_POST['clave'];
			$fecha = $_POST['fecha'];
			

			$usuarios = new Model();
			$usuarios->modificar($ced, $nombre, $apellido, $usuario, $clave, $fecha);
			$data["titulo"] = "Usuarios";
			$this->index();
		}
		
		public function eliminar($id){
			
			$usuarios = new Model();
			$usuarios->eliminar($id);
			$data["titulo"] = "Usuarios";
			$this->index();
		}	

    }
?>