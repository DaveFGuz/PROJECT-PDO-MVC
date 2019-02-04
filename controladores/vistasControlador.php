<?php

require_once "./modelos/vistasModelo.php";
class vistasControlador extends vistasModelo{

    public function obtener_plantilla(){
        return require_once "./vistas/plantilla.php";
    }
    
}