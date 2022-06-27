<?php

class MvcController{
    //LLAMADA A LA PLANTILLA
    //-------------------------------
    public function plantilla(){

        include "views/template.php";
    }

    //INTERACCION DEL USUARIO
    //-------------------------------
    public function enlacesPaginasControllers(){
        
        if(isset($_GET["action"])){
            
            $enlacesController = $_GET["action"];

        }else{
            $enlacesController = "index";
        }
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

        include $respuesta;
    }
}


?>