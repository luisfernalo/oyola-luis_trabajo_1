<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        
    </head>
    <body>
        <h2>Inicio Matrices</h2>
        <form action="{{ url('formulario') }}" method="POST">
             {{ csrf_field() }}
             <h3>Nombre</h3>
            <input type="text" name="nombre">
            <h3>Apellido</h3>
            <input type="text" name="apellido">
            <h3>edad</h3>
            <input type="number" name="edad">
            <h3>curso</h3>
            <input type="text" name="curso">
            <h3>telefono</h3>
            <input type="text" name="telefono">
            <h3>direccion</h3>
            <input type="text" name="direccion">
            <br><button type="submit">Enviar</button>
        </form>
         <form action="{{ url('formulario1') }}" method="POST">
             {{ csrf_field() }}
             <h1>Que deseas buscar</h1>
            <input type="text" name="buscar1">
               
            <br><button type="submit">Enviar</button>
        </form>
     
    </body>
</html>
