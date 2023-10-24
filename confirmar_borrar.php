<?php
require_once('../CONTROLADOR/controlador.php');
session_start();
$id=$_GET['id'];
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
            <h2>Borrar usuario</h2>
            <!-- Analyses -->
            
            <!-- End of Analyses -->

             <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Esta acción es irreversible</h3>
                            <h1>Borrar datos numero <?php echo $id;?></h1>
                            <button type="button" class="btn btn-primary"><a href="../controlador/eliminar.php?id=<?php echo $id;?>">Si</a></button>
                        </div>
                        <div class="progresss">
                            
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Esta seguro de esta acción?</h3>
                            <h1>Revisar nuevamente</h1>
                            <button type="button" class="btn btn-primary"><a href="gestionusu.php">No</a></button>
                        </div>
                        <div class="progresss">
                           
                           
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Eliminar todos los datos es posible</h3>
                            <h1>Eliminar todo</h1>
                        </div>
                        <div class="progresss">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->
            

          
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

    <script src="js/orders.js"></script>
    <script src="js/index.js"></script>
</body>


</html>