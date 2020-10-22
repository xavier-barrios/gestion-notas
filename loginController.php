<?php
include './admin.php';
include './userDAO.php';
if (isset($_POST['email'])) {
    $user = new Admin($_POST['email'], md5($_POST['psswd']));
    $userDAO = new UserDAO();
    if($userDAO->login($user)){
        // header('Location: ../view/zona.admin.php');
        echo "conexion buena";
    }else {
        // 
        echo "algo falla 1";
    }
}else {
    // header('Location: ../view/login.php');
    echo "algo falla 2";
}
?>