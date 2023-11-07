<?php
/*=============================================
Iniciar variables de sesion
=============================================*/
ob_start();
session_start();

/*=============================================
Variable Path (Rutas)
=============================================*/
$path = TemplateController::path();

/*=============================================
Capturar las rutas de las URL
=============================================*/
$routesArray  = explode("/", $_SERVER['REQUEST_URI']);
//elimina arreglo
array_shift($routesArray);

foreach ($routesArray as $key => $value) {
    $routesArray[$key] = explode("?", $value)[0];
}

/*=============================================
Solicitud Get de Template/plantilla
=============================================*/
$url = "templates?linkTo=active_template&equalTo=ok";
$method = "GET";
$fields = array();
$template = CurlController::request($url, $method, $fields);

if ($template->status == 200) {

    $template = $template->results[0];
} else {
    echo '<!DOCTYPE html>
        <html lang="en">
        <head>
        <link rel="stylesheet" href="' . $path . 'views/assets/css/plugins/adminlte/adminlte.min.css">
        </head>
        <body class="hold-transition sidebar-collapse layout-top-nav">
        <div class="wrapper">';
    include "pages/500/500.php";
    echo '</div>
        </body>
        </html>';

    return;
    //redireccionar a la pagina de error
}

/*=============================================
FORMATEO DE Datos de areglo de meta datos de la plantilla
=============================================*/

$keywords = null;
foreach (json_decode($template->keywords_template, true) as $key => $value) {
    $keywords .= $value . ", ";
}
$keywords = substr($keywords, 0, -2);

/*=============================================
FORMATEO EN DATOS OBJETOS 
=============================================*/
$fontFamily = json_decode($template->fonts_template)->fontFamily;
$fontBody = json_decode($template->fonts_template)->fontBody;
$fontSlide = json_decode($template->fonts_template)->fontSlide;

/*=============================================
FORMATEO EN DATOS JSON
=============================================*/
$topColor = json_decode($template->colors_template)[0]->top;
$templateColor = json_decode($template->colors_template)[1]->template;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $template->title_template ?> </title>

    <meta name="description" content="<?php echo $template->description_template ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">
    <link rel="icon" href="<?php echo $path ?>views/assets/img/logoRojas/<?php echo $template->logo_template ?>">
    <!-- ------------ CSS ------------------- --->
    <!-- Google Font -->
    <?php echo  urldecode($fontFamily) ?>
    <!-- Font Awesome Icons -->

    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/fontawesome-free/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JDSlider -->
    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/jdSlider/jdSlider.css">
    <!-- Toastr Alert -->
    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/toastr/toastr.min.css">
    <!-- Material PreLoader -->
    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/material-preloader/material-preloader.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/adminlte/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/template/template.css">
    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/products/products.css">



    <style>
        body {
            font-family: <?php echo $fontBody ?>, sans-serif;
        }

        .slideOpt h1,
        .slideOpt h2,
        .slideOpt h3 {
            font-family: <?php echo $fontSlide ?>, sans-serif;
        }

        .topColor {
            background: <?php echo $topColor->background ?>;
            color: <?php echo $topColor->color ?>;
        }

        .templateColor,
        .templateColor:hover,
        a.templateColor {
            background: <?php echo $templateColor->background ?> !important;
            color: <?php echo $templateColor->color ?> !important;
        }
    </style>

    <!---------------- JS ---------------------->
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="<?php echo $path ?>views/assets/js/plugins/jquery/jquery.min.js"></script>
    <!-- JDSlider JS -->
    <script src="<?php echo $path ?>views/assets/js/plugins/jdSlider/jdSlider.js"></script>
    <!-- Formatear envio de formulario lado servidor  -->
    <script src="<?php echo $path ?>views/assets/js/alerts/alerts.js"></script>

    <!-- sweetalert2  -->
    <script src="<?php echo $path ?>views/assets/js/plugins/sweetalert2/sweetalert.min.js"></script>
    <!-- Toastr Alert -->
    <script src="<?php echo $path ?>views/assets/js/plugins/toastr/toastr.min.js"></script>
    <!-- Material PreLoader -->
    <script src="<?php echo $path ?>views/assets/js/plugins/material-preloader/material-preloader.js"></script>

    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/template/colorSocial.css">
    
  <!-- DataTables  & Plugins -->
    <script src="<?php echo $path ?>views/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $path ?>views/assets/js/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo $path ?>views/assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo $path ?>views/assets/js/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo $path ?>views/assets/js/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo $path ?>views/assets/js/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo $path ?>views/assets/js/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo $path ?>views/assets/js/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo $path ?>views/assets/js/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo $path ?>views/assets/js/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo $path ?>views/assets/js/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo $path ?>views/assets/js/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

</head>


<body class="hold-transition sidebar-collapse layout-top-nav">

<input type="hidden" id="urlPath" value="<?php echo $path ?>">

    <div class="wrapper">

        <?php

        include "modules/top.php";
        include "modules/navbar.php";

        if (isset($_SESSION["admin"])) {
            include "modules/silebar.php";
        }

        if (!empty($routesArray[0])) {

            if (
                $routesArray[0] == "admin" ||
                $routesArray[0] == "salir"
            ) {

                include "pages/" . $routesArray[0] . "/" . $routesArray[0] . ".php";
            } else {

                include "pages/404/404.php";
            }
        } else {

            include "pages/home/home.php";
        }

        include "modules/footer.php";

        ?>




    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- AdminLTE App -->
    <script src="<?php echo $path ?>views/assets/js/plugins/adminlte/adminlte.min.js"></script>
    <script src="<?php echo $path ?>views/assets/js/products/products.js"></script>


</body>

</html>