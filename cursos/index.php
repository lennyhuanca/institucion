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