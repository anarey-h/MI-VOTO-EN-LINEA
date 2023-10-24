<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="widh-device-widh, initial-scale-1.0">
        <title>Registrarse</title>
        <link rel="icon" href="img/2023-03-16_102153-removebg-preview.png">
        <link rel="stylesheet" href="css/estilos2.css">
</head>
<body class="fondo">
    <div class="container">
        <div class="container__forn">
            <h2>Registrar</h2>
            
            <form action="../controlador/insertar_usu.php" method="POST"> 

                <label>Usuario</label>
                <input name="Usuario" type="text"><p>

                <label>Nombre</label>
                <input name="nombre" type="text"><p>

                <label>Apellido</label>
                <input name="apellido" type="text"><p>

                 <label>Edad</label>
                <input name="edad" type="text"><p>

                <label>Tipo de documento</label>
                <input name="tipo" type="text"><p>

                <label>Número de documento</label>
                <input name="documento_usuario" type="text"><p>

                <label>Dirección</label>
                <input name="direccion" type="text"><p>

                <label>Teléfono</label>
                <input name="telefono" type="text"><p>

                <label>Contraseña</label>
                <input type="text" name="Contrasena"><p>
                <label>Elija el rol</label>
                <select name="roles">
                    <option value="1">Administrador</option>
                    <option value="5">Usuario</option>
                    </select>
                    <p>

                <input class="boton" type="submit" value="insertar">

            </form>

        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/validar.js"></script>

</body>
</html>
