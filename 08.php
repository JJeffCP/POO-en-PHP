<?php
include 'includes/header.php';

// Modificadores de Acceso
class Empleado {

    // public -> Se puede acceder desde cualquier lugar
    // private -> Disponible en esta clase, pero no al heredarlo
    // protected -> Acceso unicamente en la clase

    // Atributos
    protected $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;   
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    public function obtenerNombre() {
        return $this->nombre;
    }

    public function cambiarNombre($nombre) {
        $this->nombre = $nombre;
    }

}

$jefry = new Empleado("Jefry", "Cardenas", "TI", "ejemplo@gmail.com", 001);

$jefry->cambiarNombre("Un nuevo nombre");

echo  $jefry->obtenerNombre();

echo "<pre>";
var_dump($jefry);
echo "</pre>";