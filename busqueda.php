<?php
include_once("conexion.php");
include_once("header.php");

?>

<div style="height: 150px;"></div>

<h2 class="titulo_pelis">Resultados de la busqueda</h2>

<?php

    $busqueda = $_GET["buscar"];

     $consulta = "SELECT  peli.titulo_peli,peli.duracion_peli, g.genero
     from peliculas_cine peli, generos g, peliculas_cine_generos pe
     where g.id = pe.genero_id and pe.pelicula_id = peli.id
     and peli.titulo_peli like '%$busqueda%'
     limit 100
     ";

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

<div style="height: 50px;"></div>

<?php
    include_once("footer.php");
?>