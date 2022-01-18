<?php
    /*
        * Controlador del menú de Cuenta
        * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
        * @since 18/01/2022 
        * @version 1.0 
        * Última modificación: 18/01/2022
    */
    if(isset($_REQUEST['cancelar'])){
        $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso']; 
        $_SESSION['paginaEnCurso'] = 'inicioPrivado';
        header('Location: index.php');
        exit;
    }
    
    if(isset($_REQUEST['borrarCuenta'])){
        $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso']; 
        $_SESSION['paginaEnCurso'] = 'borrarCuenta';
        header('Location: index.php');
        exit;
    }
    
    if(isset($_REQUEST['cambiarPassword'])){
        $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso']; 
        $_SESSION['paginaEnCurso'] = 'cambiarPassword';
        header('Location: index.php');
        exit;
    }

    $aErrores = [
        'descripcion' => ''
    ];

    $aRespuestas = [
        'descripcion' => ''
    ];
    
    $bEntradaOK = true;
    
    $_SESSION['usuario214DWESAplicacionLoginLogout']= UsuarioPDO::buscarUsuarioPorCod($_SESSION['usuario214DWESAplicacionLoginLogout']->getCodUsuario());
    
    $aUsuario=[
        'nombre' => $_SESSION['usuario214DWESAplicacionLoginLogout']->getCodUsuario(),
        'descripcion' => $_SESSION['usuario214DWESAplicacionLoginLogout']->getDescUsuario(),
        'fechaHoraUltimaConexion' => $_SESSION['usuario214DWESAplicacionLoginLogout']->getFechaHoraUltimaConexion(),
        'numConexiones' => $_SESSION['usuario214DWESAplicacionLoginLogout']->getNumAccesos(),
        'perfil' => $_SESSION['usuario214DWESAplicacionLoginLogout']->getPerfil(),
        'pasword' => $_SESSION['usuario214DWESAplicacionLoginLogout']->getPassword()
 
    ];
    
    if(isset($_REQUEST['aceptar'])){
        $aErrores['descripcion']= validacionFormularios::comprobarAlfaNumerico($_REQUEST['descripcion']);
        
        if($aErrores['descripcion']!=null){
            //limpieza del campo para cuando vuelva a aparecer el formulario
            $_REQUEST[key($error)]=$_SESSION['usuario214DWESAplicacionLoginLogout']->getDescUsuario();
            $entradaOK=false;
        }
        
    }
    else{
        $bEntradaOK = false;
    }
    if($bEntradaOK){
        $aRespuestas['descripcion'] = $_REQUEST['descripcion'];
        
        $_SESSION['usuario214DWESAplicacionLoginLogout']= UsuarioPDO::modificarUsuario($_SESSION['usuario214DWESAplicacionLoginLogout']->getCodUsuario(),$aRespuestas['descripcion']);
        
        
        $_SESSION['usuario214DWESAplicacionLoginLogout'] = $oUsuarioValido;
        $_SESSION['paginaEnCurso'] = 'inicioPrivado';
        
        header('Location: index.php');
        exit;
    }
    
    $paginaEnCurso = 'miCuenta';
    require_once "view/LayoutHeader.php";
    require_once $aVistas[$paginaEnCurso];
    require_once "view/LayoutFooter.php";