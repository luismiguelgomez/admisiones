<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DIRECTORIO FAMILIA UNIAGUSTINIANA EN TIEMPOS DE CRISIS</title>

  <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  


  <!-- Custom fonts for this template -->
  <link href="{{ asset('plantilla/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="" rel="stylesheet">
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
      <a href="https://www.uniagustiniana.edu.co" target="_blank">Bienvenido a la Uniagustiniana</a>
    </div>
  </nav>
  <header class="container">
    <section class="content">
	  <!-- Hero con formulario -->
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
                                <span align="center">  * Autorizo el uso de datos aqui registrados </span>



<!-- Ventana modal -->

    <!-- Boton -->               
    <br>
<a style="color: orange; font-size: 0.9em;" data-toggle="modal" data-target="#exampleModal">
Ver la Política de Tratamiento de la Información
</a>
     

    <!-- Modal -->
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


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>