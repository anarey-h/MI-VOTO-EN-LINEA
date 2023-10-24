<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>MI VOTO EN LINEA</title>
  <link rel="icon" href="img/uno.png">
  <link rel="stylesheet" href="css/bootstrap.css"> 
  <link rel="stylesheet" href="css/estilos.css">

   <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
    </head>

    <body id="page-top">

        <!-- Menu -->
 <style>
        a {
            text-decoration: none;
        }
    </style>

 
       <header>

        <link rel="stylesheet" href="css/menu.css">

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="img/uno.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0" class="align-items-center">
                        <li class="nav-item"><a class="nav-link" href="#services">Instrucciones</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Candidatos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contáctanos</a></li>
                    </ul>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hola <?php echo $_SESSION['activo'];?> <img src="img/desconocido.png">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cuenta.php">Mi cuenta</a>
          <a class="dropdown-item" href="salir.php">Salir</a>
        </div>
      </li>
        </div>
            </div>
        </nav>

    </header>

        <!--carrusel -->

<div class="espacio" id="home" > 
 <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/img2.svg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/img3.svg" alt="Third slide">
    </div>
  </div>
</div>
</div>


<!--información-->
    
    <form id="votingForm">

 
 
<section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">ELECCIONES PRESIDENCIALES 2022 - COLOMBIA</h2>
                    <h3 class="section-subheading text-muted"> A continuación encontrara los diferentes candidatos a la presidencia, recuerde que solo puede votar una vez por su candidato de su elección.
                    Para poder votar oprima en el circulo que se encuentra debajo de la imagen de cada candidato, al finalizar su voto oprima votar.</h1>
                </div>
        </div>

<section id="portfolio">
            <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal">
                        <div class="portfolio-hover-content"><i class="fas fa-3x"></i></div>
                        <img class="img-fluid" src="img/img6.jpg" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">GUSTAVO PETRO</div>
                        <div class="portfolio-caption-subheading text-muted">Pacto Histórico</div>
                        <input type="radio" name="candidate" value="GUSTAVO PETRO">
                    </div>
                </div>
            </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                             <div class="portfolio-hover-content"><i class="fas fa-3x"></i></div>
                                <img class="img-fluid" src="img/img10.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">FEDERICO GUTIÉRREZ</div>
                                <div class="portfolio-caption-subheading text-muted">Equipo por Colombia</div>
                                <input type="radio" name="candidate" value="FEDERICO GUTIÉRREZ">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover-content"><i class="fas fa-3x"></i></div>
                                <img class="img-fluid" src="img/img8.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SERGIO FAJARDO</div>
                                <div class="portfolio-caption-subheading text-muted">Centro Esperanza</div>
                                <input type="radio" name="candidate" value="SERGIO FAJARDO">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover-content"><i class="fas fa-3x"></i></div>
                                <img class="img-fluid" src="img/img13.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">INGRID BETANCOURT</div>
                                <div class="portfolio-caption-subheading text-muted">Verde Oxígeno</div>
                                <input type="radio" name="candidate" value="INGRID BETANCOURT">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                             <div class="portfolio-hover-content"><i class="fas fa-3x"></i></div>
                                <img class="img-fluid" src="img/img7.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">RODOLFO HERNÁNDEZ</div>
                                <div class="portfolio-caption-subheading text-muted">Liga de Gobernantes Anticorrupción</div>
                                <input type="radio" name="candidate" value="RODOLFO HERNÁNDEZ">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                               <div class="portfolio-hover-content"><i class="fas fa-3x"></i></div>
                                <img class="img-fluid" src="img/img12.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">LUIS PÉREZ</div>
                                <div class="portfolio-caption-subheading text-muted">Colombia piensa en grande</div>
                                <input type="radio" name="candidate" value="LUIS PÉREZ">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover-content"><i class="fas fa-3x"></i></div>
                                <img class="img-fluid" src="img/img9.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">JOHN MILTON</div>
                                <div class="portfolio-caption-subheading text-muted">Colombia Justa-Libres</div>
                                <input type="radio" name="candidate" value="JOHN MILTON">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover-content"><i class="fas fa-3x"></i></div>
                                <img class="img-fluid" src="img/Captura de pantalla 2023-07-13 110209.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ENRIQUE GÓMEZ</div>
                                <div class="portfolio-caption-subheading text-muted">Salvación Nacional</div>
                                <input type="radio" name="candidate" value="ENRIQUE GÓMEZ">
                        </div>
                      </div>
                    </div>
               <div class="col-lg-4 col-sm-6 mb-4">
                 <!-- Portfolio item 7-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal">
                      <div class="portfolio-hover-content"><i class="fas fa-3x"></i></div>
                        <img class="img-fluid" src="img/votoblanco.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">VOTO EN BLANCO</div>
                        <div class="portfolio-caption-subheading text-muted">...</div>
                        <input type="radio" name="candidate" value="VOTO EN BLANCO" class="radio-button">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <link rel="stylesheet" href="css/voto.css">
     <button type="button" class="boton center-button" onclick="submitVote()">Votar</button>
    </form>
    
    <p> </p>


 <p id="message" class="boton center-button" style="width:350px; text-align: center; color: white;">
                </p>

 

</section>
       
    
    <script>
        let hasVoted = false;
        
        function submitVote() {
            if (!hasVoted) {
                const selectedCandidate = document.querySelector('input[name="candidate"]:checked');
                
                if (selectedCandidate) {
                    const candidateName = selectedCandidate.value;
                    document.getElementById('message').textContent = `¡Has votado por ${candidateName}!`;
                    hasVoted = true;
                } else {
                    document.getElementById('message').textContent = 'Por favor, seleccione un candidato.';
                }
            } else {
                document.getElementById('message').textContent  = 'Ya has emitido tu voto.';
            }
        }

    </script>



        <!-- Contact-->
<section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">CONTÁCTANOS</h2>
                    <h3 class="section-subheading text-muted">Tu opinión nos ayuda a mejorar.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Nombre *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Se requiere un nombre.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Correo *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Se requiere un correo.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Correo no valido.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Numero telefonico *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Se requiere numero de télefono.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Mensaje *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Se requiere un mensaje.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">El mensaje se envió con éxito</div>
                            <br />
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error enviando el mensaje!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar</button></div>
                </form>
            </div>
        </section>
         <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/login?lang=es" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://es-la.facebook.com/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://co.linkedin.com/" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Política de Privacidad</a>
                        <a class="link-dark text-decoration-none" href="#!">Condiciones de uso</a>
                    </div>
                </div>
            </div>
        </footer>
<!--contenedor del carrusel y del acordeon -->

    <div class="slider__btn slider__btn--right"></div>
    <div class="slider__btn slider__btn--left"></div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> 
<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>