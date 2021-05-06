<?php

include_once("conexion.php");


?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Filmoteca</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" type="text/css">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <nav class="navbar-fixed-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
                    <div class="fondo_logo">
                    <a class="navbar-brand " href="index.php"><img class="logo" src="imagenes/logo.png"/></a>
                    </div>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle generos btn btn-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Generos
                            </a>
                            <div class="btn-group">
                            
                            <ul class="dropdown-menu scrollable-menu" role="menu">
                            
                                <?php

                                    $consulta = "SELECT genero
                                                from generos";
                                    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

                                    

                                    while ($columna = mysqli_fetch_array( $resultado))
                                    {
                                        
                                        echo "<form action='genero.php' method='get'> ";
                                        
                                        echo "<li><input type='submit' class='dropdown-item' name='genero' value= '" . $columna['genero'] . "'></li>";
                                       
                                        echo "</form>";
                        
                                    }

                                ?>
                                        </ul>
                            
                                    </div>
                            </div>

                        </li>
                        
                        <li class="nav-item btn btn-light usuario"><img class="img-fluid" src="imagenes/usuario-de-perfil.png"/></li>
                        
                        
                        </ul>
                        <form class="form-inline my-2 my-lg-0" action="busqueda.php" method="get">
                        <input class="form-control mr-sm-2" type="search" placeholder="Escribir..." aria-label="Search" name="buscar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="enviar">Buscar</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    
    



  
    

    
</body>
</html>