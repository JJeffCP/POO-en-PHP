<?php
include 'includes/header.php';

// Constructor Property Promotion
class Empleado {

    // No se asignan los atributos, las declara automaticamente
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codig,
    ) {

    }
}

$jefry = new Empleado("Jefry", "Cardenas", "TI", "ejemplo@gmail.com", 001);
$luz = new Empleado("Luz", "Pino", "Administracion", "ejemplo@gmail.com", 002);


echo "<pre>";
var_dump($jefry);
echo "</pre>";

echo "<pre>";
var_dump($luz);
echo "</pre>";