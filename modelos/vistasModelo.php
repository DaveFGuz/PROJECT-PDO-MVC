<?php

class vistasModelo{
    protected function obtener_vistas_modelo($vista){
        $listaBlanca=["admin","home"];
        if(in_array($vista,$listaBlanca)){
            if(is_file("./vistas/contenidos".$vista."-view.php")){
                $contenido="./vista/contenidos".$vista."view.php";
            }else{
                $contenido="login"
            }
        }
    }
}