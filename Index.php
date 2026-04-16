<?php
class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function introduce() {
        return "Hello, my name is " . $this->nombre . " and I am " . $this->edad . " years old.";
    }
}
$persona1 = new Persona("Alice", 30);
$persona2->mostrar()
?>