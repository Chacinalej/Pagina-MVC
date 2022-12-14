<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <link rel="stylesheet" href="assets/estilosForm.css">
</head>
<body>
    <header>Formulario</header>
    <main>
        <form action="../archivo5.php?c=Controla&a=guarda" class="form" id="form" onsubmit="return validar()" method="post">

        <div class="form_grupo" id="grupo_ced">
            <Label for="ced" class="form_label">Cedula de identidad</Label>
                <div class="form_grupo_input">
                    <input type="text" name="ced" id="ced" placeholder="Cedula de Identidad">
                </div>
        </div>

        <div class="form_grupo" id="grupo_nombre">
            <label for="nombre" class="form_label">Nombre</label>
                <div class="form_grupo_input">
                    <input type="text" name="nombre" id="nombre"  placeholder="Nombre" >
                </div>
        </div>

        <div class="form_grupo" id="grupo_Apellido">
            <label for="Apellido" class="form_label">Apellido</label>
                <div class="form_grupo_input">
                    <input type="text" name="apellido" id="apellido"  placeholder="Apellido" >
                </div>
        </div>

        <div class="form_grupo" id="grupo_user">
            <label for="Usuario" class="form_label">Usuario</label>
                <div class="form_grupo_input">
                    <input type="text" name="usuario" id="usuario" placeholder="Usuario">
                </div>
        </div>

        <div class="form_grupo" id="grupo_pass">
            <label for="clave" class="form_label">Clave</label>
                <div class="form_grupo_input">
                    <input type="text" name="clave" id="clave" placeholder="Clave"">
                    <i class="form_validacion-estado fas fa-times-circle"></i>
                </div>
            </div>

            <div class="form_grupo" id="grupo_fecha">
                <label for="fecha" class="form_label">Dia de Nacimiento</label>
                    <div class="form_grupo" id="grupo_date">
                        <input type="date" name="fecha" id="fecha">
            </div>
            
            <div class="form_grupo form_grupo-btn-enviar">
                <button class="boton">
                    <a href="../index.html">Regresar</a>
                </button>
                <button class="boton">
                    <a href="../config_list.php">Lista</a> 
                </button>
            
                <input type="submit" id="btn" class="boton" name="submit" value="Enviar">
            </div>     
        </form>
    </main>

    <script src="assets/app.js"></script>
</body>
</html>

