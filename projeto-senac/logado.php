<?php 
session_start();
if(!isset($_SESSION["usuario_logado"])){
    header("Location: login.php");
}
?>