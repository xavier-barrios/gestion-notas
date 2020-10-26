<?php
require_once './persona.php';
class Alumno extends Persona{

    private $nombre;
    private $apellidop;
    private $apellidom;
    private $grupo_alumno;
    
    function __construct($id_user,$email,$password,$nombre,$apellidop,$apellidom,$grupo_alumno){
        parent:: __construct($id_user,$email,$password);
        $this->nombre=$nombre;
        $this->apellidop=$apellidop;
        $this->apellidom=$apellidom;
        $this->grupo_alumno=$grupo_alumno;
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

    public function getGrupo_alumno(){
        return $this->grupo_alumno;
    }

    public function setGrupo_alumno($grupo_alumno){
        $this->grupo_alumno = $grupo_alumno;
        return $this;
    }
}
?>