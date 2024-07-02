<?php
include 'includes/header.php';
// INSTANCIAR UNA CLASE
class Empleado {

}

// new -> se esta instanciando una clase
// $empleado -> objeto con el valor de esa instancia
// Una sola clase puede instanciar multiples veces

$empleado = new Empleado;
$empleado2 = new Empleado;
$empleado3 = new Empleado;

echo "<pre>";
var_dump($empleado);
echo "</pre>";