<?php
    /*
        * Controlador del Login
        * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
        * @since 21/12/2021 
        * @version 1.0 
        * Última modificación: 11/01/2022
    */

    
    if(isset($_REQUEST['login'])){    
        
        if (validacionFormularios::comprobarAlfaNumerico($_REQUEST['usuario'], 8, 4, 1) == null
                && validacionFormularios::comprobarAlfaNumerico($_REQUEST['password'], 8, 4, 1) == null) {
            
            $oUsuarioValido = UsuarioPDO::validarUsuario($_REQUEST['usuario'], $_REQUEST['password']);
            if($oUsuarioValido){
                $_SESSION['usuario214DWESAplicacionLoginLogout'] = $_REQUEST['usuario'];
                $_SESSION['FechaHoraConexionAnterior'] = $oUsuarioValido->T01_FechaHoraUltimaConexion;

                $_SESSION['pagina'] = 'inicio';
                header('Location: index.php');
                exit;
            }
        }
    }
    
    $paginaEnCurso = 'login';
    require_once "view/LayoutHeader.php";
    require_once $aVistas[$paginaEnCurso];
    require_once "view/LayoutFooter.php";