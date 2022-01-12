<?php
    if(isset($_REQUEST['volver'])){
        $_SESSION['pagina'] = 'login';
        header('Location: index.php');
        exit;
    }
    $paginaEnCurso = 'WIP';
    require_once "view/LayoutHeader.php";
    require_once $aVistas[$paginaEnCurso];
    require_once "view/LayoutFooter.php";
