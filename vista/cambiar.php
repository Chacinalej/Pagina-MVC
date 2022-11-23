<?php
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
	</head>
	
	<body>
		<div class="container">
			
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="archivo5.php?c=Controla&a=actualizar">
				
				<input type="hidden" id="ced" name="ced" value="<?php echo $data["ced"]; ?>" />
				
				<div class="form-group">
					<label for="ced">Cedula</label>
					<input type="text" class="form-control" id="ced" name="ced" value="<?php echo $data["usuarios"]["ced"]?>" />
				</div>
				
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data["usuarios"]["nombre"]?>" />
				</div>
				
				<div class="form-group">
					<label for="apellido">Apellido</label>
					<input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $data["usuarios"]["apellido"]?>" />
				</div>
				
				<div class="form-group">
					<label for="usuario">Usuario</label>
					<input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $data["usuarios"]["usuario"]?>" />
				</div>
				
				<div class="form-group">
					<label for="clave">Clave</label>
					<input type="text" class="form-control" id="clave" name="clave" value="<?php echo $data["usuarios"]["clave"]?>" />
				</div>
                	
				<div class="form-group">
					<label for="fecha">Fecha</label>
					<input type="text" class="form-control" id="fecha" name="fecha" value="<?php echo $data["usuarios"]["fecha"]?>" />
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</body>
	</html>