<?php
class  TemplateController{
    //Vista principal de la pla plantilla
    public function index(){
        include "views/plantilla.php";
    }

    //Ruta Principal o Dominio del sitio
    static public function path(){
        if(!empty($_SERVER["HTTPS"])&&("on"== $_SERVER["HTTPS"])){
            return "https://".$_SERVER["SERVER_NAME"]."/";
        }else{
            return "http://".$_SERVER["SERVER_NAME"]."/";
        }
    }
}
