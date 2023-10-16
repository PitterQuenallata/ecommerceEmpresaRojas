<?php

$path = TemplateController::path();


?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Top Navigation + Sidebar</title>

    <!---------------- CSS ---------------------->
    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Ubuntu+Condensed&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    
    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/fontawesome-free/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JDSlider -->
    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/jdSlider/jdSlider.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/adminlte/adminlte.min.css">

    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/template/template.css">
    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/products/products.css">

    <!---------------- JS ---------------------->
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="<?php echo $path ?>views/assets/js/plugins/jquery/jquery.min.js"></script>

    <!-- JDSlider JS -->
    <script src="<?php echo $path ?>views/assets/js/plugins/jdSlider/jdSlider.js"></script>


</head>

<body class="hold-transition sidebar-collapse layout-top-nav">
    <div class="wrapper">

        <?php
        include "modules/top.php";
        include "modules/navbar.php";
        include "pages/home/home.php";
        include "modules/silebar.php";
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