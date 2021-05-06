<?php
    include_once("conexion.php");
    include_once("header.php");
?>

<div class="row">
    <div class="col-md-12">
    
        <div style="height: 100px;"></div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active carousel">
            <img class="d-block w-100 img-fluid img-thumbnail" src="imagenes/starwars2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 img-fluid img-thumbnail" src="imagenes/jumanji.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 img-fluid img-thumbnail" src="imagenes/frozen.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 img-fluid img-thumbnail" src="imagenes/avengers.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 img-fluid img-thumbnail origen" src="imagenes/origen.jpg" alt="Third slide">
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>

    </div>
</div>
<div style="height: 50px;"></div>

<h2 class="titulo_pelis">Listado de peliculas por genero</h2>

<?php

$genero = $_GET["genero"];

     $consulta = "SELECT  peli.titulo_peli,peli.duracion_peli, g.genero
                from peliculas_cine peli, generos g, peliculas_cine_generos pe
                where g.id = pe.genero_id and pe.pelicula_id = peli.id
                and g.genero = '$genero'
                order by rand()
                limit 100";

    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");




   
    while ($columna = mysqli_fetch_array( $resultado))
    {
    echo "<div class='linea_pelis'>
            <hr/>
        </div>
        <br/>";
    echo "<div class='row texto_lista'>";
    echo "<form action='peliculas.php' method='get'>
            <input class='btn btn-outline-success btn-lg'   type='submit' value='" . $columna['titulo_peli'] . "' name='peli'>
            
        </form>
        </div>
        <br/>
            <div class='row texto_lista'>
            <div class='col-md-2'>Duracion:  " . $columna['duracion_peli'] . "min</div>
            <div class='col-md-2'>Genero:  " . $columna['genero'] . "</div>
            ";
    echo "</div>";

    }


?>

</div>
<div style="height: 50px;"></div>




<?php

include_once("footer.php");

?>