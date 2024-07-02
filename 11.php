<?php
include 'includes/header.php';


// Clases Abstractas 
// Una clase abstracta no se puede instanciar y va a ser utilizada heredando hacia otras clases
abstract class Persona {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre, $apellido, $email, $telefono) 
    {   
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    
    public function mostrarInformacion() {
        echo "Nombre: " . $this->nombre . " Apellido: " . $this->apellido . " Email:" . $this->email;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
}

class Empleado extends Persona{
    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento) 
    {   
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }

    

}

class Proveedor extends Persona{
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa) 
    {   
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->empresa = $empresa;

    }

    public function mostrarInformacion() {
        echo "Nombre: " . $this->nombre . " Apellido: " . $this->apellido . " Email:" . $this->email . " De la empresa: " . $this->empresa;
    }

}

$persona = new Persona('Nombre', 'Apellido', 'ejemplo@gmail.com', 2341234);
$empleado = new Empleado('Jefry', 'Cardenas', 'ejemplo@gmail.com',  1231254124, 005, 'TI');
$proveedor = new Proveedor('Chris', 'Garcia', 'ejemplo@gmail.com', 2131254152,  'Facebook');

echo "<pre>";
var_dump($persona);
echo "</pre>";

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($proveedor);
echo "</pre>";

$empleado->mostrarInformacion();

echo "<br>";

$proveedor->mostrarInformacion();

echo "<br>";

echo $proveedor->getTelefono();
