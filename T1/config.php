<?php
	
	require_once "config/DB.php";
	require_once "control/Controlador.php";

	$lista= new miController;
	$lista-> index();
?>