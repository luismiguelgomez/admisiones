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

                    <div class="col-md-5 offset-7" style="background: gray; opacity: 0.92 ; border: 1px solid black; border-radius: 15px 15px 15px 15px;">

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
    </section>
  </header>
  
</body>
</html>