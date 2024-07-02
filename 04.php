<?php
include 'includes/header.php';

class Empleado {

    // Constructor -> Se ejecuta automaticamente cuando una nueva instancia es creada en una clase
    // En php se le conoce como metodos magicos.

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
}

$jefry = new Empleado("Jefry", "Cardenas", "TI", "ejemplo@gmail.com", 001);
$luz = new Empleado("Luz", "Pino", "Administracion", "ejemplo@gmail.com", 002);


echo "<pre>";
var_dump($jefry);
echo "</pre>";

echo "<pre>";
var_dump($luz);
echo "</pre>";