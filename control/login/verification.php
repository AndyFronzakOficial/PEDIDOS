<?php
session_start();

if(!$_SESSION['usuario']){
    header('Location: ../../../../public/index.php');
    exit();
}


?>