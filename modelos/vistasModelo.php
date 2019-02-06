<?php

class vistasModelo{
    protected function obtener_vistas_modelo($vista){
        $listaBlanca=["admin","home"];

        if(in_array($vista,$listaBlanca)){
            if(is_file("./vistas/contenidos/".$vista."-view.php")){
                $contenido="./vistas/contenidos/".$vista."-view.php";
            }else{
                $contenido="login";
            }
        }elseif($vista=="login"){
            $contenido="login";
        }elseif($vista=="index"){
            $contenido="login";
        } else{
            $contenido="login";
        }
        return $contenido;
    }
}