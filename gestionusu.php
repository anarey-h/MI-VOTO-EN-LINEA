<?php
require_once('../controlador/controlador.php');
session_start();
$cuenta = new Model;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="css/444.css">
    <title>MI VOTO EN LINEA</title>
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="img/uno.png">
                    <h2>VOTO<span class="danger">ENLINEA</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="administrador.php">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Inicio</h3>
                </a>
                <a href="usuarios.php">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Usuarios</h3>
                </a>
                <a href="gestionusu.php">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Gestion lista</h3>
                </a>
                <a href="report.php">
                    <span class="material-icons-sharp">
                        report_gmailerrorred
                    </span>
                    <h3>Reportes</h3>
                </a>
                <a href="../index.html">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Salir</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            &nbsp;
            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2>Gestionar Usuarios</h2>
                <table>
                    <thead>
                        <tr>
                          <th> id </th>
                          <th> Nombre </th>
                          <th> Apellido </th>
                          <th> Edad </th>
                          <th> Tipo de documento </th>
                          <th> Documento </th>
                          <th> Teléfono </th>
                          <th> Dirección </th>
                          <th> Estado </th>
                          <th> Usuario </th>
                          <th> Contraseña </th>
                          <th> id_rol </th>
                          
                        </tr>
                      </thead>
                    <tbody> 

                        <?php
                foreach ($cuenta->listar()as $reg=>$valor){
                ?>
                <tr>
                    <td>
                        <?php echo $valor['id_usuario']; ?>
                    </td>
                    <td>
                        <?php echo $valor['nombre_usuario']; ?>
                    </td>
                    <td>
                        <?php echo $valor['apellido_usuario']; ?>
                    </td>
                    <td>
                        <?php echo $valor['edad_usuario']; ?>
                    </td>
                    <td>
                        <?php echo $valor['tipodedocumento_usuario']; ?>
                    </td>
                    <td>
                        <?php echo $valor['documento_usuario']; ?>
                    </td>
                    <td>
                        <?php echo $valor['telefono_usuario']; ?>
                    </td>
                    <td>
                       <?php echo $valor['direccion_ususario']; ?> 
                    </td>
                    <td>
                        <?php echo $valor['estado_usuario']; ?>
                    </td>
                    <td>
                        <?php echo $valor['usuario_usuario']; ?>
                    </td>
                    <td>
                        <?php echo $valor['contrasena_usuario']; ?>
                    </td>
                    <td>
                        <?php echo $valor['id_rolFK']; ?>
                    </td>
                    <th>
                      <a href="confirmar_borrar.php?id=<?php echo $valor['id_usuario']?>&nombre=<?php echo $valor['usuario_usuario']?>">
                    <img src="img/borrar.png"></a>
                    </th>
                    <th>
                      <a href="actualizar_usu.php?id=<?php echo $valor['id_usuario']?>&nombre=<?php echo $valor['usuario_usuario']?>">
                    <img src="img/lapiz.png"></a>
                    </th>
                </tr>
            </tbody>
        <?php  
    }
    ?>
                </table>
                <a><button onclick="window.print();" class="dontPrint">Imprimir</button> </a>
            </div>






            <!-- End of Recent Orders -->

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                

                <div class="profile">
                    <div class="info">
                        <p>Hola, <b>Ale</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="img/profile-1.jpg">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="img/uno.png">
                    <h2>VOTO EN LINEA</h2>
                    <p>Siempre a tu lado</p>
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Recordatorios</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Taller Candidatos</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Taller Targeton</h3>
                            <small class="text_muted">
                                01:00 PM - 06:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                

            </div>

        </div>


    </div>

    <script src="js/index.js"></script>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/validar.js"></script>
</body>

</html>