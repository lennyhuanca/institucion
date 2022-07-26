<?php
include "../notas/model/conexion.php";


$conexion = new Conexion(); //instanciar la calse conexion

$alumnos=$conexion->seleccionar_tabla('alumno');
$materias=$conexion->seleccionar_tabla('materia');


//echo '<pre>';
//print_r($materia);
//echo '</pre>';

var_dump($alumnos, $materias);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
</head>
<body>
    <center>
        <h3>REGISTRO</h3>
        <table>
            <tr>
                <td>Codigo</td>
                <td>Nombre</td>
                <td>Apellido paterno</td>
                <td>Apellido materno</td>
                <td>C.i.</td>
                <td>Telefono</td>
            </tr> 
            <?php

foreach ($alumnos as $dato) {
}
?>  
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        </table>
    </center>
</body>
</html>