<?php
include 'includes/header.php';
include 'DB.php';

// Comunicar dos Clases
class Empleado {

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
$nombre = $jefry->getNombre();


$db = new DB($nombre);
$db->guardar();
