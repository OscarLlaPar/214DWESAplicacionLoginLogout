<?php

    /**
    * Modelo: Error
    * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
    * @since 12/01/2022 
    * @version 1.0 
    * Última modificación: 12/01/2022
    */
class Error {
    private $mensaje;
    function __construct($mensaje) {
        $this->mensaje = $mensaje;
    }
    function getMensaje() {
        return $this->mensaje;
    }
}
