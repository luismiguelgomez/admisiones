<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Correo respuesta Admisiones 2022</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <h1>Muchas gracias por inscribirse en el formulario. Estamos en la solicitud</h1>
    <p>{{ $details ['body'] }}</p>
    <strong>Datos del correo:</strong>
    <p>Nombre: {{ $details ['nombre']}}</p>
    <p>Ciudad: {{ $details ['ciudad']}}</p>
    <p>Correo: {{ $details ['correo']}}</p>
    <p>Teléfono: {{ $details ['telefono']}}</p>
    <p>Grado: {{ $details ['grado']}}</p>
    <br>
    <p style="color:red;">Gracias por llenar el formulario</p>    
    </body>
</html>                  