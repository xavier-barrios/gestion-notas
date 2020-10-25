<?php
class Alumno extends Persona{

    private $nombre;
    private $apellidop;
    private $apellidom;
    private $grupo_alumno;
    
    function __construct($id_user,$email,$password){
        parent:: __construct($id_user,$email,$password);
    }

    public function getNombre(){
        return $this->nombre;
    }
 
    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellidop(){
        return $this->apellidop;
    }

    public function setApellidop($apellidop){
        $this->apellidop = $apellidop;
        return $this;
    }
 
    public function getApellidom(){
        return $this->apellidom;
    }
 
    public function setApellidom($apellidom){
        $this->apellidom = $apellidom;
        return $this;
    }
}
?>