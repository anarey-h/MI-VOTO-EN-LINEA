<?php
require_once('../controlador/controlador.php');
session_start();
$cuenta = new Model;
?>
<!DOCTYPE html>
<html lang="es">
<head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="widh-device-widh, initial-scale-1.0">
        <title>Login</title>
        <link rel="icon" href="img/2023-03-16_102153-removebg-preview.png">
        <link rel="stylesheet" href="css/estilos2.css">
</head>
<body class="fondo">
    <div class="container">
        <div class="container__forn">
            <img src="img/2023-03-16_102153-removebg-preview.png" alt="esto es una imagen de candado">
            <h2>Mi cuenta</h2>
            <?php
        foreach ($cuenta->mostrarCuenta($_SESSION['usa_codigo']) as $reg=>$valor)
        {
            ?>
            <form action="../controlador/actualizarcuenta.php" method="POST"> 

                <input type="text" placeholder="Usuario" name="Usuario" id="Usuario" value="<?php echo   $valor['usuario_usuario'];?>">

                <input type="text" placeholder="Nombre" name="nombre" id="nombre" value="<?php echo $valor['nombre_usuario'];?>">

                <input type="text" placeholder="Apellido" name="apellido" id="apellido" value="<?php echo
                 $valor['apellido_usuario'];?>">

                <input type="text" placeholder="Edad" name="edad" id="edad" value="<?php echo $valor['edad_usuario'];?>">

                <input type="text" placeholder="Tipo de Identificación" name="tipo" id="tipo" value="<?php echo $valor['tipodedocumento_usuario'];?>" >

                <input type="text" placeholder="Identificación" name="documento_usuario" id="documento_usuario" value="<?php echo $valor['documento_usuario'];?>" >  

                <input type="text" placeholder="Dirección" name="direccion" id="direccion" value="<?php echo $valor['direccion_ususario'];?>">

                <input type="number" placeholder="Teléfono" name="telefono" id="telefono" value="<?php echo $valor['telefono_usuario'];?>">

                <input type="text" placeholder="Contraseña" name="Contrasena" id="Contrasena" value="<?php echo $valor['contrasena_usuario'];?>">

                <input class="ckeck" type="checkbox" id="checkid">  
                <label for="checkid">Recuerdame</label>

                <input type="hidden" name="id" id="id" value="<?php echo $valor['id_usuario'];?>">
                <input class="boton" type="submit" value="Guardar">

                <p>
                <div id="mensaje" style="background:#0a1e35; width:350px; text-align: center; color: white;">
                </div>
            </p>
            </form>

            <?php  
            }
            ?>

        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/validar.js"></script>

</body>
</html>
