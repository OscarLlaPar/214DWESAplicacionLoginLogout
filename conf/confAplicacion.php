<?php
    //Requerir las librerias
    //Requerir el modelo
    
    //Incluir librería de validación en la configuración de la aplicación
    require_once 'core/libreriaValidacion.php';
    
    //Modelo incluido en la configuración de la aplicación
    require_once 'model/Usuario.php';
    require_once 'model/UsuarioDB.php';
    require_once 'model/UsuarioPDO.php';
    require_once 'model/DB.php';
    require_once 'model/DBPDO.php';
    
    // Configuración de la base de datos incluida
    require_once 'conf/confDB.php';
    
    //Array de los ficheros de controladores
    $aControladores = [
        "login" => "controller/cLogin.php",
        "inicio" => "controller/cInicio.php"
    ];
    
    //Array de los ficheros de vistas
    $aVistas = [
        "login" => "view/vLogin.php",
        "inicio" => "view/vInicio.php"
    ];