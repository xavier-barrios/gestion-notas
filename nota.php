<?php
class Nota{
    public $id_nota;
    public $nombre_asignatira;
    public $nota_alumno;
    public $id_alumno;

    function __construct($id_nota,$nombre_asignatira,$nota_alumno,$id_alumno){
        $this->id_nota=$id_nota;
        $this->nombre_asignatira=$nombre_asignatira;
        $this->nota_alumno=$nota_alumno;
        $this->id_alumno=$id_alumno;
    }

    
    public function getId_nota(){
        return $this->id_nota;
    }
 
    public function setId_nota($id_nota){
        $this->id_nota = $id_nota;
        return $this;
    }

    public function getNombre_asignatira(){
        return $this->nombre_asignatira;
    }
 
    public function setNombre_asignatira($nombre_asignatira){
        $this->nombre_asignatira = $nombre_asignatira;
        return $this;
    }

    public function getNota_alumno(){
        return $this->nota_alumno;
    }

    public function setNota_alumno($nota_alumno){
        $this->nota_alumno = $nota_alumno;
        return $this;
    }

    public function getId_alumno(){
        return $this->id_alumno;
    }

    public function setId_alumno($id_alumno){
        $this->id_alumno = $id_alumno;
        return $this;
    }
}
?>