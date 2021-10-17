<?php 

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Efetue o login para acessar a página... ");
}

?>

