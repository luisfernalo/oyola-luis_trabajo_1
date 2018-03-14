<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script>
            function nombre() {
                  
                   }                }
              
          </script> 
    </head>
    <body>
        <h2>Inicio Matrices</h2>
        
             <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle"
                          data-toggle="dropdown"> Desea buscar  <span class="caret"></span>
                  </button>
                 
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="nombre">Nombre</a></li>
                    <li><a href="#">Apellido</a></li>
                    <li><a href="#">edad</a></li>
                    <li class="divider"></li>
                    <li><a href="#">curso</a></li>
                    <li><a href="#">telefono</a></li>

                  </ul>
                </div>
          
          




         <form action="{{ url('formulario1') }}" method="POST">
             {{ csrf_field() }}
             <h1>Que deseas buscar</h1>
            <input type="text" name="buscar1">
               
            <br><button type="submit">Enviar</button>
        </form>



     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
