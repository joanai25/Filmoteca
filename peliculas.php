<?php
include_once("conexion.php");
include_once("header.php");
?>




<?php
echo "<div style='height: 150px;'></div>";
$pelicula = $_GET['peli'];




echo "<h1 class='titulo_pelis'>". $pelicula ."</h1>";
//director








echo "<div class='row'>
       
        <div class='col-md-2 col-6'>
        <h4 class='color-cat'>Directores </h4>
        
        

       
    "; 

    $consulta = "SELECT  d.director
                from  peliculas_cine peli, directores d,peliculas_cine_directores ped
                where d.id = ped.director_id and ped.pelicula_id = peli.id
            and peli.titulo_peli = '$pelicula'
            ";

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

while ($columna = mysqli_fetch_array($resultado))
{
   
echo "
        


        <span class='texto_lista'>
        " .$columna['director'] ."
        </span>
        
    
<br/>
";

}

echo"<br/></div>";


echo "
        <div class='col-md-2 col-6'>
        <h4 class='color-cat'>Productores </h4>
        
        
";
//Productores

$consulta = "SELECT p.productor
            from  peliculas_cine peli, productores p, peliculas_cine_productores pep
            where p.id = pep.productor_id and pep.pelicula_id = peli.id
            and peli.titulo_peli = '$pelicula'
            ";

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

while ($columna = mysqli_fetch_array($resultado))
{
   
echo "
        


        <span class='texto_lista'>
        " .$columna['productor'] ."
        </span>
        
    
<br/>
";

}
echo "<br/></div>";



echo "
        <div class='col-md-2 col-6'>
        <h4 class='color-cat'>Musicos </h4>
        
        
        ";

//Musicos

$consulta = "SELECT  m.musico
            from  peliculas_cine peli, musicos m,peliculas_cine_musicos pem
            where m.id = pem.musico_id and pem.pelicula_id = peli.id
            and peli.titulo_peli = '$pelicula'
            ";

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

while ($columna = mysqli_fetch_array($resultado))
{
   
echo "
        


        <span class='texto_lista'>
        " .$columna['musico'] ."
        </span>
        
    
<br/>
";


}

echo"<br/></div>";

//Guionista
echo "
        <div class='col-md-2 col-6'>
        <h4 class='color-cat'>Guionistas </h4>
        
        ";


$consulta = "SELECT  g.guionista
            from  peliculas_cine peli, guionistas g,peliculas_cine_guionistas peg
            where g.id = peg.guionista_id and peg.pelicula_id = peli.id
            and peli.titulo_peli = '$pelicula'
            ";

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

while ($columna = mysqli_fetch_array($resultado))
{
   
echo "
         <span class='texto_lista'>
        " .$columna['guionista'] ."
        </span>
        
    
<br/>
";

}

echo "<br/></div>";


// Fecha
echo "
        <div class='col-md-2 col-6'>
        <h4 class='color-cat'>Fecha </h4>
        
        ";


$consulta = "SELECT  produccion
            from peliculas_cine
            where titulo_peli = '$pelicula'
            ";

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

while ($columna = mysqli_fetch_array($resultado))
{
   
echo "
         <span class='texto_lista'>
        " .$columna['produccion'] ."
        </span>
        
    
<br/>
";

}

echo "<br/></div>";

//Nacionalidad

echo "
        <div class='col-md-2 col-6'>
        <h4 class='color-cat'>Nacionalidad </h4>
        
        ";


$consulta = "SELECT  n.nacionalidad
            from  peliculas_cine peli, nacionalidades n,peliculas_cine_nacionalidades pen
            where n.id = pen.nacionalidad_id and pen.pelicula_id = peli.id
            and peli.titulo_peli = '$pelicula'
            ";

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

while ($columna = mysqli_fetch_array($resultado))
{
   
echo "
         <span class='texto_lista'>
        " .$columna['nacionalidad'] ."
        </span>
     
<br/>
";

}

echo "<br/></div>
</div>";

//Actores

echo "<div class='row'>
        <div class='col-md-2 col-6'>
        <h4 class='color-cat'>Actores </h4>
        
        ";


$consulta = "SELECT  a.actor
            from  peliculas_cine peli, actores a,peliculas_actores pea
            where a.id = pea.actor_id and pea.pelicula_id = peli.id
            and peli.titulo_peli = '$pelicula'
            ";

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");


while ($columna = mysqli_fetch_array($resultado))
{
   
echo "
         <span class='texto_lista'>
        " .$columna['actor'] ."
        </span>
        
    
<br/>
";

}
echo "<br/>
    </div>";


//Estudio

echo "
        <div class='col-md-2 col-6'>
        <h4 class='color-cat'>Estudios </h4>
        
        ";


$consulta = "SELECT  e.estudio
            from  peliculas_cine peli, estudios e,peliculas_cine_estudios pee
            where e.id = pee.estudio_id and pee.pelicula_id = peli.id
            and peli.titulo_peli = '$pelicula'
            ";

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");


while ($columna = mysqli_fetch_array($resultado))
{
   
echo "
         <span class='texto_lista'>
        " .$columna['estudio'] ."
        </span>
        
    
<br/>
";

}
echo "<br/>
    </div>";


//Distribuidora

echo "
        <div class='col-md-2 col-6'>
        <h4 class='color-cat'>Distribuidoras </h4>
        
        ";


$consulta = "SELECT  dis.distribuidora
            from  peliculas_cine peli, distribuidoras dis,peliculas_cine_distribuidoras pedis
            where dis.id = pedis.distribuidora_id and pedis.pelicula_id = peli.id
            and peli.titulo_peli = '$pelicula'
            ";

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");


while ($columna = mysqli_fetch_array($resultado))
{
   
echo "
         <span class='texto_lista'>
        " .$columna['distribuidora'] ."
        </span>
        
    
<br/>
";

//Generos
}
echo "<br/>
    </div>";


echo "
        <div class='col-md-2 col-6'>
        <h4 class='color-cat'>Generos </h4>
        
        ";


$consulta = "SELECT g.genero
            from peliculas_cine peli, generos g, peliculas_cine_generos pe
            where g.id = pe.genero_id and pe.pelicula_id = peli.id
            and peli.titulo_peli = '$pelicula'
            ";

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");


while ($columna = mysqli_fetch_array($resultado))
{
   
echo "
         <span class='texto_lista'>
        " .$columna['genero'] ."
        </span>
        
    
<br/>
";

}
echo "<br/>
    </div>";


//Duracion



echo "
        <div class='col-md-2 col-6'>
        <h4 class='color-cat'>Duración</h4>
        
        ";


$consulta = "SELECT  duracion_peli
            from peliculas_cine
            where titulo_peli = '$pelicula'
            ";

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");


while ($columna = mysqli_fetch_array($resultado))
{
   
echo "
         <span class='texto_lista'>
        " .$columna['duracion_peli'] ." minutos
        </span>
        
    
<br/>
";

}
echo "<br/>
    </div>
</div>";




include_once("footer.php");

?>



