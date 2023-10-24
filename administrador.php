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
            

            <h2>Nuevos Usuarios</h2>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Total de utilidad</h3>
                            <h1>$65,024</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+81%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Visitas del sitio</h3>
                            <h1>24,981</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>-48%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Búsquedas</h3>
                            <h1>14,147</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+21%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

            <!-- New Users Section -->
            <div class="new-users" href="registrarse.php">
                <h2>Nuevos Usuarios</h2>
                <div class="user-list">
                    <div class="user">
                        <img src="img/luk.jpg">
                        <h2>Sergio</h2>
                        <p>Hace 54 min</p>
                    </div>
                    <div class="user">
                        <img src="img/tere.jpg">
                        <h2>Juana</h2>
                        <p>Hace 3 horas</p>
                    </div>
                    <div class="user">
                        <img src="img/fed.jpg">
                        <h2>Fede</h2>
                        <p>Hace 6 horas</p>
                    </div>
                    <div class="user">
                        <img src="img/hi.jpg">
                        <h2>María</h2>
                        <p>Hace 3 horas</p>
                    </div>
                </div>
            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2>Gestionar Usuarios</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Codigo Nombre</th>
                            <th>Estado</th>
                            <th>Numero de documento</th>
                            <th>Nombre</th>
                            <th>Contraseña</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <a href="gestionusu.php">Más Info</a>
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

    <script src="js/orders.js"></script>
    <script src="js/index.js"></script>
</body>

</html>