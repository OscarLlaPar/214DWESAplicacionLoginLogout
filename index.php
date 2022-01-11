<?php
    /*
        * Index de la aplicación
        * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
        * @since 21/12/2021 
        * @version 1.0 
        * Última modificación: 11/01/2022
    */
    require_once "conf/confAplicacion.php";
    session_start();
    
    
    
    if(!isset($_SESSION['pagina']) && !isset($_SESSION['usuario214DWESAplicacionLoginLogout'])){
        $_SESSION['pagina'] = 'login';
    }

    // Cargado de la página indicada.
    require_once $aControladores[$_SESSION['pagina']]; 
    
    