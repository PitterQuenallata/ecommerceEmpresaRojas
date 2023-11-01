<?php
//deputar errores
ini_set("display_errors", 1);
ini_set("log-errors", 1);
ini_set("error-log", "C:/xampp/htdocs/proyectos/ecommerceEmpresaRojas/web/php_error.log");


/*=============================================
Require
=============================================*/
require_once "controllers/template.controller.php";
require_once "controllers/curl.controller.php";
require_once "extensions/vendor/autoload.php";

/*=============================================
Plantilla
=============================================*/

$index = new TemplateController();
$index -> index();