<?php
include 'includes/header.php';

// Metodos estaticos -> Son los que no requieren una instancia para poder acceder a ellos.
class Empleado {

    // Atributos
    protected static $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        self::$nombre = $nombre;
        //$this->nombre = $nombre;   
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

    public static function obtenerEmpleado() {
        echo "Desde metodo estatico";
    }

    // Manera de obtener el nombre o atributo estatico.
    public static function getNombre() {
        return self::$nombre;
    }
}

//Empleado::obtenerEmpleado();

$jefry = new Empleado("Jefry", "Cardenas", "TI", "ejemplo@gmail.com", 001);

echo $jefry::getNombre();

echo "<pre>";
var_dump($jefry);
echo "</pre>";

