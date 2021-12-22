<?php
    require_once "conf/confAplicacion.php";
    session_start();
    if(isset($_REQUEST['login'])){
        
        $_SESSION['UsuarioLoginLogout']="a";
        
    }
    if(isset($_REQUEST['logout'])){
        session_destroy();
        header("Location: index.php");
        
    }
    (!isset($_SESSION['UsuarioLoginLogout']))?require_once 'controller/cLogin.php':require_once 'controller/cInicio.php';  
?>