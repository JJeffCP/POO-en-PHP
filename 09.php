<?php
include 'includes/header.php';

// Getters y Setters
class Empleado {

    // public -> Se puede acceder desde cualquier lugar
    // private -> Disponible en esta clase, pero no al heredarlo
    // protected -> Acceso unicamente en la clase

    // Atributos
    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;   
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    /* 
        Get -> Para obtener un valor
        Set -> Para asignar o modificar un valor
    */
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
        /**/ 
    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

}

$jefry = new Empleado("Jefry", "Cardenas", "TI", "ejemplo@gmail.com", 001);

$jefry->setNombre("Un nuevo nombre");
$jefry->setApellido("Un nuevo Apellido");
$jefry->setDepartamento("Un nuevo Departamento");
$jefry->setCodigo('2024');


echo $jefry->getNombre();
echo $jefry->getApellido();
echo $jefry->getCodigo();
echo $jefry->getDepartamento();


