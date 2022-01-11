<?php
    /*
        * Controlador del Inicio
        * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
        * @since 21/12/2021 
        * @version 1.0 
        * Última modificación: 11/01/2022
    */
    $vistaEnCurso = $aVistas['inicio'];
    
    if(isset($_REQUEST['logout'])){
        session_unset();
        session_destroy();

        header('Location: index.php');
        exit;
    }

    
    $sSelect = <<<QUERY
        SELECT T01_DescUsuario, T01_NumConexiones, T01_ImagenUsuario FROM T01_Usuario
        WHERE T01_CodUsuario='{$_SESSION['usuario214DWESAplicacionLoginLogout']}';
    QUERY;
    $oResultado = DBPDO::ejecutarConsulta($sSelect)->fetchObject();

    $sDescUsuario = $oResultado->T01_DescUsuario;
    $iNumConexiones = $oResultado->T01_NumConexiones; 

    require_once "view/LayoutHeader.php";
    require_once $vistaEnCurso;
    require_once "view/LayoutFooter.php";