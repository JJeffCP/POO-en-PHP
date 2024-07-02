<?php
include 'includes/header.php';

// Metodos
class Empleado {

    // Atributos
    public $nombre;
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

    public function nombreEmpleado() {
        echo $this->nombre . " " . $this->apellido;
    }

    public function departamentoEmpleado() {
        return $this->departamento;
    }
}

$jefry = new Empleado("Jefry", "Cardenas", "TI", "ejemplo@gmail.com", 001);
$jefry->nombreEmpleado();

$luz = new Empleado("Luz", "Pino", "Administracion", "ejemplo@gmail.com", 002);
$luz->nombreEmpleado();

echo "<pre>";
var_dump($jefry);
echo "</pre>";

echo "<pre>";
var_dump($luz);
echo "</pre>";

$departamento1 = $jefry->departamentoEmpleado();
echo $departamento1;