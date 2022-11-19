
<?php
	
	require_once "config/DB.php";
	require_once "control/Controlador.php";
	
	if(isset($_POST['submit'])):
		$user= new miController;

		$user-> guarda();
	endif;
?>