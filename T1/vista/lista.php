<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
						
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr>
							<th>Cedula</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Usuario</th>
							<th>Clave</th>
							<th>Fecha</th>
						
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["usuarios"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["ced"]."</td>";
							echo "<td>".$dato["nombre"]."</td>";
							echo "<td>".$dato["apellido"]."</td>";
							echo "<td>".$dato["usuario"]."</td>";
							echo "<td>".$dato["clave"]."</td>";
							echo "<td>".$dato["fecha"]."</td>";
							echo "</tr>";
						}
						?>
					</tbody>
				<a href="archivo4.html">VOLVER</a>
					
				</table>
			</div>
		</div>
	</body>
</html>