<?php
include 'includes/header.php';

// Atributos de una clase
class Empleado {

    // Atributos
    public $nombre;
    public $apellido;
    public $email;
    public $codigo;
}

$empleado = new Empleado;
$empleado->nombre = "Jefry";
$empleado->apellido = "Cardenas";

echo "<pre>";
var_dump($empleado);
echo "</pre>";



$empleado2 = new Empleado;
$empleado2->nombre = "Luz";
$empleado2->apellido = "Pino";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";