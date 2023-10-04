<?php
//deputar errores
ini_set("display_errors", 1);
ini_set("log-errors", 1);
ini_set("error-log", "J:/xampp/htdocs/proyectos/ecommerceEmpresaRojas/web/php_error.log");



require_once "controllers/controller.template.php";

$index = new TemplateController();
$index -> index();