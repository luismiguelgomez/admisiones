<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admisiones 2022</title>

  <!-- Custom fonts for this template -->
  <link href="{{ asset('plantilla/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <!-- Not required: presentational-only.css only contains CSS for prettifying the demo -->
  <link rel="stylesheet" href="{{ asset('css/presentational-only/presentational-only.css') }}">

  <!-- responsive-full-background-image.css stylesheet contains the code you want -->
  <link rel="stylesheet" href="{{ asset('css/responsive-full-background-image.css') }}">
  
  <!-- Not required: jquery.min.js and presentational-only.js is only used to demonstrate scrolling behavior of the viewport  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
</head>
<body>
  <nav class="navbar" id="top">
    <div class="inner">
      <a href="http://agustinianonorte.edu.co/" target="_blank">Bienvenido al colegio Agustiniano Norte</a>
    </div>
  </nav>

  <!-- Hero con formulario -->
  <header class="container"> 
      <section class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="row">

                  <div class="col-md-5" style="background: #0606068a; opacity: 0.9;  border: 1px solid black; border-radius: 15px 15px 15px 15px;">

                          <h3 align="center" style="color: white;"> <strong> Registra tus Datos </strong> </h2>
                          <h4 align="center" style="color: white;">Se parte de la familia Agustiniana</h3>

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
                              <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                              <br>
                                  <span align="center">
                                    <input type="checkbox" required>
                                    Autorizo el uso de datos aqui registrados
                                  </span>

                                <!-- Politicas de tratamiento de datos -->
                                    <!-- Boton -->               
                                    <br>
                                <a style="color: orange; font-size: 0.9em;" data-toggle="modal" data-target="#exampleModal">
                                Ver la Política de Tratamiento de la Información
                                </a>
                                    <!-- ventana -->
                                    <div class="modal fade" data-backdrop="false" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                      <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content" style="height: 600px; width: 800px;">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Política de Tratamiento de la Información</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <iframe width="100%" height="100%" src="https://agustinianonorte.edu.co/wp-content/uploads/2020/02/POLITICA-DE-PRIVACIDAD-DATOS-PERSONALES-COLEGIOS.pdf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                              <br><br>
                            </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </section>
  </header>
  
  <!--Seccion dos -->
  <section class="section justify-content-center text-center" style="margin-top: 10%;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Nuestra Comunidad de Agustinos Recoletos hace presencia en</h2>
        </div>
        <!--11 Colegios-->
        <div class="col-md-6">
          <div>
            <div>
              <img src="img/600X400.png" class="img-fluid" style="border-radius: 20px;">
            </div>
            <div>
              <h3>11 colegios</h3>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div>
            <div>
              <img src="img/600X400.png" class="img-fluid" style="border-radius: 20px;">
            </div>
            <div>
              <h3>1 universidad</h3>
            </div>
          </div>
        </div>
        <!--Imagen de Somos formadores de excelencia-->
        <div class="col-md-12" style="margin-top: 30px">
          <div>
            <div>
              <img src="img/1200X800.png" class="img-fluid" style="border-radius: 20px;">
            </div>
            <div>
              <h3>Somos formadores de excelencia</h3>
            </div>
          </div>
        </div>
        
        <div class="col-md-12" style="margin-top: 30px">
          <h4>
          Admisiones Abiertas 2022
          <br>
          Inscripción: $105.000
          </h4>
        </div>

      </div>
    </div>
  </section>
<br>
  <!--Terccer sección-->
  <section class="section justify-content-center text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Actividades</h2><br>
        </div>
        <div class="col-md-6 contenedor">
          <h5>Inglés intensivo</h5>
          <img src="img/1200X800.png" class="img-fluid" style="border-radius: 20px;">
          <div class="centrado">Nuestro programa de ingles intensivo permite a nuestros estudiantes 
            abordar una segunda lengua de forma adecuada y práctica lo que facilita su aprendizaje 
            para el buen desarrollo de las actividades futuras. 
            Clases magistrales y entornos adecuados para el buen desarrollo de nuestras actividades 
            académicas en un entorno agradable.   
          </div>
        </div>
        <div class="col-md-6 contenedor">
          <h5>Actividades de tiempo libre</h5>
          <img src="img/1200X800.png" class="img-fluid" style="border-radius: 20px;">
          <div class="centrado">Creamos una cultura del adecuado manejo del tiempo libre en el colegio y 
            fuera de él, mediante la participación en actividades físicas, deportivas, científicas, 
            recreativas y culturales, donde se evidencien los valores Agustinianos para fortalecer las 
            habilidades disciplinares y de inteligencia emocional en niños y jóvenes. 
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/600X400.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/600X400.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/600X400.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
</body>
</html>