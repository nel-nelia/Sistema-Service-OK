<?php
require_once "./modelo/vistasmodelo.php";

class vistasControladores extends vistasmodelo{
    /*-----------------controlador obtener plantilla-----------*/
    public function obtener_plantilla_controller(){
        return require_once "vistas/plantilla.php";
    }

    /*------------contrlador obtener vistas--*/
    public function obtener_vista_controller(){
        if(isset($GET['views'])){
            $ruta=explode("/",$GET['views']);
            $respuesta=vistasmodelo::obtener_vistas_modelo($ruta[0]);
        }else{
            $respuesta="login";
        }
        return $respuesta;
    }
}