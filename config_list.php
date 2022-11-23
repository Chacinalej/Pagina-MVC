<?php
	
	require_once "config/DB.php";
	require_once "control/Controla.php";

	$lista= new ControlaController;
	$lista-> index();
?>