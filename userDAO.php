<?php
require_once 'admin.php';
class UserDao{
    private $pdo;

    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }

    public function login($user){
        $query = "SELECT * FROM tbl_administrador WHERE email_administrador	=? AND password_administrador=?";
        $sentencia=$this->pdo->prepare($query);
        $email=$user->getEmail();
        $psswd=$user->getPassword();
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$psswd);
        $sentencia->execute();
        
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        if(!empty($numRow) && $numRow==1){
            $user->setEmail($result['email_administrador']);
            $user->setId_user($result['id_administrador']);
            // creamos la sesion
            session_start();
            $_SESSION['user']=$user;

            return true;
        }else {
            echo "<script>alert('error aqui')</script>";
            return false;
        }
    }
}

?>