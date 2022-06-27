<?php
class Paginas{

    public static function enlacesPaginasModel($enlaces){

        if( $enlaces == "inicio" || $enlaces == "ingresar" || $enlaces == "usuario"|| $enlaces == "salir" ){
            $module = "views/modules/".$enlaces.".php";

            }
            else if($enlaces == "index"){
                $module = "views/modules/registro.php";
            }else{
                $module = "views/modules/registro.php";
            }

        return $module;
        
    }
}
