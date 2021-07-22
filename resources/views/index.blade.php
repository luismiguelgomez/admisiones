<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DIRECTORIO FAMILIA UNIAGUSTINIANA EN TIEMPOS DE CRISIS</title>

  <!-- Bootstrap core CSS -->
  <!--<script src="{{ asset('js/agency.min.js') }}"></script>-->
  <link href="{{ asset('plantilla/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('plantilla/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/agency.css') }}" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img src="../variacion/img/logos/escudo-agustiniano-norte-2.png" width="40%">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#video">¿Qué es?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#porque">¿Por qué surge esta iniciativa?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#quienes">¿Quiénes podrán beneficiarse?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#formulario">¿Cómo participar en esta iniciativa?</a>
          </li>
          
          <!--
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          --->
        
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <!-- <div class="intro-text"> -->

        <div class="row">
          <div class="col">
            <table>
              <td style="padding: 50px;">
              </td>
            </table>
          </div>
        </div>

<!-- Hero con formulario -->
<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
          <div class="row">

              <div class="col-md-5 offset-7" style="background: #a88689; border: 1px solid black">

                  <h3 align="center" style="color: black;"> <strong> Registra tus Datos </strong> </h2>
                  <h4 align="center" style="color: black;">Se parte de la familia Agustiniana</h3>

                    <form action="formulario" method="POST" enctype="multipart/form-data">
                    @csrf
                      
                      <br>
                      <input class="form-control" data-label="Nombre" data-msg="Nombre" type="text" name="nombre" placeholder="Nombres y apellidos" maxlength="250" required> <br>
                      <input class="form-control" data-label="Ciudad" data-msg="ciudad" type="text" name="ciudad" placeholder="Ciudad" maxlength="100" required> <br>
                      <input class="form-control" data-label="email" data-msg="Email" type="email" name="email" placeholder="Email" maxlength="100" required> <br>
                      <input class="form-control" data-label="telefono" data-msg="Teléfono" type="number" name="telefono" placeholder="Teléfono" required> <br>
      
                      <select class="form-control" name="grado" required>
                          <option value="1">Selecciona el grado</option>
                          <option value="jardin">Jardin</option>
                          <option value="transicion">Transición</option> 
                          <option value="primero">Primero</option>
                          <option value="segundo">Segundo</option>
                          <option value="tercero">Tercero</option>
                          <option value="cuarto">Cuarto</option>
                          <option value="quinto">Quinto</option>
                          <option value="sexto">Sexto</option>                                    
                          <option value="septimo">Séptimo</option>
                          <option value="octavo">Octavo</option>
                          <option value="noveno">Noveno</option>
                          <option value="septimo">Septimo</option>
                          <option value="noveno">Noveno</option>
                          <option value="decimo">Décimo</option>
                          <option value="once">Once</option>
                      </select>
                      <br>
                      <button type="submit" class="btn btn-dark btn-block">Enviar</button>
                      <br>
                          <span align="center">  * Autorizo el uso de datos aqui registrados </span>
                      <br><br>
                    </form>
              </div>
          </div>
      </div>
  </div>
</div>

        <!--<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">¿Quieres saber más?</a>-->
      </div>
    </div>
  </header>
  <section class="page-section" id="video">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">¿Qué es?</h2>
          <!--<h3 class="section-subheading text-muted">La propuesta</h3>-->
        </div>

      </div>
      <div class="row text-center">
        <div class="col-md-12">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/WrYEGnE6AQA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
       
      </div>
    </div>
    <div class="container">
      <div class="row">
       <!-- <div class="col-lg-12 text-center">
         <!-- <h2 class="section-heading text-uppercase">¿Por qué surge esta iniciativa?</h2>-->
          <!--<h3 class="section-subheading text-muted">La propuesta</h3>
        </div>-->

      </div>
      <div class="row text-center">
        <div class="col-md-12">
             <p style="text-align: justify;">
              <br>
            Iniciativa solidaria cuyos propósitos son:
          <ol style="text-align: justify;">
            <li value = "1">Dar a conocer a través de un
            documento de consulta la oferta de
            servicios y de bienes de los
            miembros de la comunidad
            Uniagustiniana a nivel nacional e
            internacional.</li>
            <li>Contribuir al fortalecimiento de la
            oferta de bienes y servicios incluidos
            en el Directorio a través de
            capacitaciones y asesorías.</li>
            <li style="text-align: justify;">Promover la creación de alianzas entre los vinculados a esta iniciativa.</li>
          </ol>
        </p>
        <p style="text-align: justify;">
          &nbsp;Este documento de consulta es útil para la
          selección de proveedores, todo bajo el
          precepto de:
          <br>
          &nbsp;YO APOYO A MI COMUNIDAD
          UNIAGUSTINIANA, COMPRO SUS
          PRODUCTOS Y ADQUIERO SUS
          SERVICIOS.
        </p>  
       
          <br>
         <!-- <img src="img/temas/quees.jpg" alt="quees" width="60%">-->
        </div>
       
      </div>
    </div>
</section>

  <!-- Services -->
 <!-- <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Services</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">E-Commerce</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Responsive Design</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Web Security</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Portfolio Grid -->
  <!--CLICKS INFO CONGRESO -->
  <!--
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Líneas de Investigacion</h2>
          <h3 class="section-subheading text-muted"> 27 de mayo de 2020</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/1.tecnologias.png" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Investigación y pedagogía</h4>
            <p class="text-muted">Mediadas por tecnologías digitales</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/2.pensamiento-creativo.png" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Investigación y pedagogía</h4>
            <p class="text-muted">Desarrollo del pensamiento creativo</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/3.modelo-evaluacion.png" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Investigación, pedagogía</h4>
            <p class="text-muted">Modelos de evaluación</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/4.aula.png" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Experiencias investigativas</h4>
            <p class="text-muted">Significativas en el aula</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/5.diversidad.png" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Investigación y pedagogía</h4>
            <p class="text-muted">Responden a la diversidad</p>
          </div>
        </div>
      </div>
    </div>
  </section>
-->
<section class="bg-light page-section" id="porque">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">¿Por qué surge esta iniciativa?</h2>
          <!--<h3 class="section-subheading text-muted">La propuesta</h3>-->
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-12">
             <p style="text-align: justify;">
              En tiempo de crisis y de dificultades, todos estamos llamados a
              reinventarnos, a proponer formas creativas para apoyar a nuestra
              comunidad y a trabajar de forma colectiva. Esta iniciativa solidaria
              surge como un proyecto fundamentado en el valor agustiniano de
              “sentido comunitario” que hace parte de nuestra identidad
              institucional.
              <br>
              Reconociendo que como consecuencia de la pandemia y de la
              crisis económica, muchas familias de la comunidad
              Uniagustiniana han sido afectadas, algunas personas han perdido
              sus empleos y otras se han visto obligadas a cerrar sus pequeñas o 
              medianas empresas; la Uniagustiniana a través de esta
              iniciativa promueve un esquema de economía solidaria,
              caracterizada por la cooperación, apoyo mutuo, la realización de
              actividades centradas en la persona y la promoción del desarrollo
              desde lo local.
            </p>
          <br>
          <div class="contenedor">
            <div style="color: #fed136;" class="centrado">YO APOYO A MI COMUNIDAD UNIAGUSTINIANA,<br> 
              <br>COMPRO SUS PRODUCTOS Y ADQUIERO SUS SERVICIOS</div>
            <img width="80%" src="img/temas/dondenace.jpg" />
            
          </div>
          <!--<img src="" alt="quees" width="60%">-->
        </div>
       
      </div>
    </div>
</section>

<section class="page-section" id="quienes">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">¿Quiénes podrán beneficiarse de esta iniciativa?</h2>
          <!--<h3 class="section-subheading text-muted">La propuesta</h3>-->
        </div>

      </div>
      <div class="row text-center">
        <div class="col-md-12">
            <p style="text-align: justify;">
             Que no sea en forma de texto, sino Incluir

              un ícono por cada perfil:
            <ol>
              <li value = "1">Estudiantes</li>
              <li>Egresados</li>
              <li>Profesores</li>
              <li>Administrativos</li>
              <li>Familiares de los miembros de la
            comunidad Uniagustiniana.</li>
            </ol>
            </p> 
        </div>
       
      </div>
    </div>
</section>



<!--FIN CLICKS INFO CONGRESO -->
  <!-- About -->
  <!-- 
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2009-2011</h4>
                  <h4 class="subheading">Our Humble Beginnings</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>March 2011</h4>
                  <h4 class="subheading">An Agency is Born</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>December 2012</h4>
                  <h4 class="subheading">Transition to Full Service</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>July 2014</h4>
                  <h4 class="subheading">Phase Two Expansion</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Be Part
                  <br>Of Our
                  <br>Story!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
-->
  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Testimonios</h2>
          <h3 class="section-subheading text-muted">Directorio Uniagustiniano</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/1.png" alt="">
            <h4>Estudiante del programa de Mercadeo</h4>
            <p>Marco Antonio Martínez Mateus - 
              <br>Ferretería en el barrio
              Valladolid, servicios de
              reparación, remodelación y
              construcción de todo tipo de
              espacios.</p>
            <!--
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul> -->
          </div>
        </div>
        
        <div class="col-sm-3">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/2.png" alt="">
            <h4>Egresado del programa de Negocios Internacionales</h4>
            <p>William Nicolas Morales Velez-
              <br>
              Pizzas Queen, pizza
              artesanal y comidas
              rápidas, ubicado en
              Funza
              Cundinamarca.
            </p>
            <!--
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          -->
          </div>
        </div>
        <div class="col-sm-3">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/3.png" alt="">
            <h4>Administrativa Office-Programa de Tecnología en Gastronomía</h4>
            <p>Luz Dari Garcia Naranjo -<br>
              J.L servicios
              de
              embellecimien
              to y lavado de
              vehículos
            </p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/3.png" alt="">
            <h4>Profesor del programa
              de Negocios
              Internacionales</h4>
            <p>Sergio Ivan Salguero
              Rodríguez -<br>
              Servicios de
              suministros de
              insumos
              empresariales, como
              seguridad industrial,
              botiquines,
              productos médicos y
              medicamentos,
              mobiliario e
              insumos.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="formulario">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">¿Quiénes podrán beneficiarse de esta iniciativa?</h2>
          <!--<h3 class="section-subheading text-muted">La propuesta</h3>-->
        </div>

      </div>
      <div class="row text-center">
        <div class="col-md-12">
            <p style="text-align: justify;">
             Que no sea en forma de texto, sino Incluir

              un ícono por cada perfil:
            <ol>
              <li value = "1">Estudiantes</li>
              <li>Egresados</li>
              <li>Profesores</li>
              <li>Administrativos</li>
              <li>Familiares de los miembros de la
            comunidad Uniagustiniana.</li>
            </ol>
            </p> 
        </div>
       
      </div>
    </div>
  <!--<center> <a href="https://docs.google.com/forms/d/e/1FAIpQLSerq5IpSuPHih-ME4orduWNGiTkqvHU8Rfa1RgvnwGdPOCQBA/viewform" target="_blank"><img src="img/temas/encuesta.jpg" alt="encuesta" width="100%"></a></center>-->
  
  </section>

  <!-- Clients -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src=" " alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="https://www.uniagustiniana.edu.co/" target="_blank">
            <img class="img-fluid d-block mx-auto" src="img/logos/logo-uniagustinianaWeb.png" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="https://www.uniagustiniana.edu.co/facultad-de-humanidades-ciencias-sociales-y-educacion" target="_blank">
            <img class="img-fluid d-block mx-auto" src="img/logos/LogoHumanidades.png" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src=" " alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contáctanos</h2>
          <h3 class="section-subheading text-muted">Inscríbete o contáctanos si tienes dudas</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6" style="padding-bottom: 20px;">
                <a id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" href="https://accounts.google.com/ServiceLogin/webreauth?service=wise&passive=1209600&continue=https%3A%2F%2Fdocs.google.com%2Fforms%2Fu%2F1%2Fd%2Fe%2F1FAIpQLSerq5IpSuPHih-ME4orduWNGiTkqvHU8Rfa1RgvnwGdPOCQBA%2Fviewform&followup=https%3A%2F%2Fdocs.google.com%2Fforms%2Fu%2F1%2Fd%2Fe%2F1FAIpQLSerq5IpSuPHih-ME4orduWNGiTkqvHU8Rfa1RgvnwGdPOCQBA%2Fviewform&ltmpl=forms&authuser=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank">INSCRÍBETE </a>
              </div>
              <div class="col-md-6" style="padding: 20px;">
                <p style="color: white; font-size: 100%;">Escríbenos al correo: ori@uniagustiniana.edu.co <br> Llamanos al numer 3xx xxxxxx</p>
              </div>
              <div class="clearfix"></div>
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Uniagustiniana 2020</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://twitter.com/UniagustOficial" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/uniagustiniana?ref=hl" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/school/uniagustiniana/" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Investigación y pedagogía</h2>
                <p class="item-intro text-muted">mediadas por tecnologías digitales</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/1.tecnologias-full.png" alt="">
                <p>Las tecnologías digitales están presentes en muchas de nuestras actividades cotidianas y están transformando las formas de relación de los sujetos en la sociedad. Uno de los ámbitos en los que se hace cada vez más evidente la influencia de la tecnología es la educación, donde las nuevas herramientas digitales están transformando la manera de generar, validar y transmitir el conocimiento.  En este sentido la línea de trabajo en “Experiencias de Investigación y pedagogía mediadas por tecnologías digitales” tiene como propósito ofrecer un espacio de intercambio de conocimiento sobre experiencias de investigación en todos los niveles educativos en los que la tecnología haya servido como facilitador de los procesos de formación. La línea recibirá el reporte de trabajos de investigación finalizados sobre: Cultura y tecnologías digitales, relación entre pedagogía y tecnologías digitales, sistemas de Gestión de Aprendizaje (LMS), educación virtual, aprendizaje mediado por 
Tecnologías Digitales, Transformación digital y educación, entre otros.
                </p>
                <ul class="list-inline">
                  <li>Date:  27 de mayo de 2020</li>
                  <li>Client: III CONGRESO EDUCACIÓN</li>
                  <li>Category: EDUCACIÓN</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Investigación y pedagogía </h2>
                <p class="item-intro text-muted">Para el desarrollo del pensamiento creativo</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/2.pensamiento-creativo-full.png" alt="">
                <p>Esta línea tiene como pretensión, integrar iniciativas y proyectos que aborden el tema de la pedagogía, desde una perspectiva que busque desarrollar el pensamiento creativo. Entiéndase entonces, que esto conlleva el desarrollo de procesos divergentes, diferenciales y que impliquen la transformación de espacios conceptuales, desde los cuales, se propongan escenarios, estrategias y propuestas formativas que incluyan la creatividad como principio generador de experiencias innovadoras alternativas en el escenario educativo.</p>
                <ul class="list-inline">
                  <li>Date:  27 de mayo de 2020</li>
                  <li>Client: III CONGRESO EDUCACIÓN</li>
                  <li>Category: EDUCACIÓN</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Investigación, pedagogía y modelos de evaluación</h2>
                <p class="item-intro text-muted">  </p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/3.modelo-evaluacion-full.png" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date:  27 de mayo de 2020</li>
                  <li>Client: III CONGRESO EDUCACIÓN</li>
                  <li>Category: EDUCACIÓN</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Experiencias investigativas</h2>
                <p class="item-intro text-muted">Significativas en el aula</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/4.aula-full.png" alt="">
                <p>Esta línea pretende abordar las diversas experiencias al interior del aula (espacio de construcción del conocimiento bajo la resignificación y reflexión de experiencias) al respecto de las situaciones que se presentan diariamente y que son merecedoras de su estudio y profundización; dentro de los contextos de abordaje se encuentran la primera infancia, educación básica primaria, básica secundaria, media fortalecida, educación técnica, tecnológica y universitaria.
Se invita a los maestros y profesionales de la educación a participar al respecto de sus buenas prácticas pedagógicas, que inciden en la calidad de vida de las personas y en sus procesos de formación. </p>
                <ul class="list-inline">
                  <li>Date:  27 de mayo de 2020</li>
                  <li>Client: III CONGRESO EDUCACIÓN</li>
                  <li>Category: EDUCACIÓN</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Investigación y pedagogía</h2>
                <p class="item-intro text-muted">que responden a la diversidad</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/5.diversidad-full.png" alt="">
                <p>Esta línea aborda la diversidad desde un rol en el que a partir de la investigación se genera mayor visibilidad y fortalecimiento de la educación inclusiva a partir del enfoque diferencial, resaltando así  la importancia del comprender y abordar la diversidad en los diferentes contextos, particularmente en el campo de la pedagogía. 
Lo anterior se abordará a partir de las siguientes líneas de acción:
    • Prevención del trabajo infantil
    • Equidad de género y diversidad sexual
    • Atención a estudiantes con discapacidad y capacidades y/o talentos excepcionales
    • Interculturalidad y grupos étnicos
    • Educación de personas jóvenes y adultos 
    • Sistema de responsabilidad penal
    • Aulas hospitalarias
    • Aulas refugio </p>
                <ul class="list-inline">
                  <li>Date:  27 de mayo de 2020</li>
                  <li>Client: III CONGRESO EDUCACIÓN</li>
                  <li>Category: EDUCACIÓN</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Reporte de investigación</h2>
                <p class="item-intro text-muted">Ponencia</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/6.full.png" alt="">
                <p>Se presentan aquí todos los trabajos que hayan sido producto de investigaciones terminadas y que estén directamente relacionadas con alguna de las líneas de trabajo. Estos reportes deben tener: Introducción, justificación, marco teórico/referentes conceptuales, diseño metodológico, análisis y conclusiones. Cada ponencia tendrá 20 minutos de exposición y 10 minutos de preguntas.
Se estarán recibiendo reportes de investigación hasta el día 27 de abril de 2020, a través del correo congreso_espedagogia@uniagustiniana.edu.co
                </p>
                <ul class="list-inline">
                  <li>Date:  27 de mayo de 2020</li>
                  <li>Client: III CONGRESO EDUCACIÓN</li>
                  <li>Category: EDUCACIÓN</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 7 -->
  <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Revisión teórica</h2>
                <p class="item-intro text-muted">Ponencia</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/7.full.png" alt="">
                <p>Redacción de un texto tipo ensayo en donde claramente el autor(es) expongan argumentos desde lo teórico y académico con relación a una de las líneas de trabajo del congreso. Estos ensayos deben tener una consolidación teórica fuerte que sustente la idea desarrollada. Cada ponencia tendrá 20 minutos de exposición y 10 minutos de preguntas.
Se estarán recibiendo revisiones teóricas (ensayo) hasta el día 27 de abril de 2020, a través del correo congreso_espedagogia@uniagustiniana.edu.co</p>
                <ul class="list-inline">
                  <li>Date:  27 de mayo de 2020</li>
                  <li>Client: III CONGRESO EDUCACIÓN</li>
                  <li>Category: EDUCACIÓN</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 8 -->
  <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Experiencias significativas</h2>
                <p class="item-intro text-muted">Ponencia</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/8.full.png" alt="">
                <p>Propuestas innovadoras que hayan tenido cierto impacto en la sociedad en general y que guarden relación con las líneas planteadas en el congreso. A manera de relato, estas formas de participación deben presentar una contextualización general de la población, el desarrollo de las experiencias y los aprendizajes derivados de la misma. Cada ponencia tendrá 20 minutos de exposición y 10 minutos de preguntas.
Se estarán recibiendo experiencias significativas hasta el día 27 de abril de 2020, a través del correo congreso_espedagogia@uniagustiniana.edu.co</p>
                <ul class="list-inline">
                  <li>Date:  27 de mayo de 2020</li>
                  <li>Client: III CONGRESO EDUCACIÓN</li>
                  <li>Category: EDUCACIÓN</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 9 -->
  <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">POSTER</h2>
                <p class="item-intro text-muted">III CONGRESO EDUCACIÓN, PEDAGOÍA Y DIDÁCTICA</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/9.full.jpg" alt="">
                <p>"La pedagogía necesita ser razonada si ha de desarrollar la naturaleza humana para que pueda alcanzar su destino." <br>Immanuel Kant.</p>
                <ul class="list-inline">
                  <li>Date:  27 de mayo de 2020</li>
                  <li>Client: III CONGRESO EDUCACIÓN</li>
                  <li>Category: EDUCACIÓN</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('plantilla/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('plantilla/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('plantilla/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
  <script src="{{ asset('js/contact_me.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('js/agency.min.js') }}"></script>

</body>

</html>
