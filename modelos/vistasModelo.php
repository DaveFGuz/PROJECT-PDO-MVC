<?php

class vistasModelo{
    protected function obtener_vistas_modelo($vista){
        $listaBlanca=["admin","home","period","subject","section","teacher",
        "representative","registration","payments","student","salon","school","404"];

        if(in_array($vista,$listaBlanca)){
            if(is_file("./vistas/contenidos/".$vista."-view.php")){
                $contenido="./vistas/contenidos/".$vista."-view.php";
            }else{
                $contenido="404";
            }
        }elseif($vista=="login"){
            $contenido="login";
        }elseif($vista=="index"){
            $contenido="login";
        } else{
            $contenido="404";
        }
        return $contenido;
    }
}