<?php
require_once './admin.php';
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:./login.php');
}
 echo '<div class="logo"><h1>Bienvenido '.$_SESSION['user']->getEmail().'</h1><h1 style="float: right;"><a href="../controller/logoutController.php">Logout</a></h1></div>';