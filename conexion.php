<?php
    
    
//LOCAL
    // Datos de la base de datos
        $usuario = "root";
        $password = "";
        $servidor = "localhost";
        $basededatos = "practica_navidad";

/*


// Datos de la base de datos
$usuario = "id11087142_root";
$password = "123456";
$servidor = "localhost";
$basededatos = "id11087142_bd_ciclismo";

*/


        // creación de la conexión a la base de datos con mysql_connect()
        $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
    
        // Selección del a base de datos a utilizar
        $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

        if (!mysqli_set_charset($conexion, "utf8")) 
        {
        printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conexion));
        exit();
        }
    
 ?>