<?php
class vistasModelo{
    /*-----------------Modelo Obtener las Vistas------------*/

    protected static function obtener_vistas_modelo($vistas){
        $listaBlanca=[];
        if(in_array($vistas, $listaBlanca)){
            if(is_file("./views/contenidos/".$vistas."_view.php")){
                $contenido="./views/contenidos/".$vistas."_view.php";
            }else{
                $contenido="404";
            }
        }else if($vistas=="login" || $vistas=="index"){
            $contenido="login";
        }else{
            $contenido="404";
        }
        return $contenido;
    }
}