<?php

class MvcController{
    //LLAMADA A LA PLANTILLA
    //-------------------------------
    public function pagina(){

        include "views/template.php";
    }

    //INTERACCION DEL USUARIO
    //-------------------------------
    public function enlacesPaginasControllers(){
        
        if(isset($_GET["action"])){
            
            $enlaces = $_GET["action"];

        }else{
            $enlaces = "index";
        }
        $respuesta = Paginas::enlacesPaginasModel($enlaces);

        include $respuesta;
    }
}


?>