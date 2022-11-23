<?php
	
	function cargarControlador($controlador){
		
		$nombreControlador = ucwords($controlador)."Controller";
		$archivoControlador = 'control/'.ucwords($controlador).'.php';
		
		if(!is_file($archivoControlador)){
			
			$archivoControlador= 'control/'.CONTROLADOR_PRINCIPAL.'.php';
			
		}
		require_once $archivoControlador;
		$control = new $nombreControlador();
		return $control;
	}
	
	function cargarAccion($controller, $accion, $ced = null){
		
		if(isset($accion) && method_exists($controller, $accion)){
			if($ced == null){
				$controller->$accion();
				} else {
				$controller->$accion($ced);
			}
			} else {
			$controller->ACCION_PRINCIPAL();
		}	
	}
?>