<?php
require_once './persona.php';
class Admin extends Persona{

    function __construct($email,$password){
        parent:: __construct($email,$password);
    }
}
?>