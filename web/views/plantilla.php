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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/fontawesome-free/css/all.min.css">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/adminlte/adminlte.min.css">

  <!---------------- JS ---------------------->
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery -->
<script src="<?php echo $path ?>views/assets/js/plugins/jquery/jquery.min.js"></script>


</head>
<body class="hold-transition sidebar-collapse layout-top-nav">
<div class="wrapper">
  
  <?php 
  include "modules/top.php";
  include "modules/navbar.php";
  include "pages/inicio.php";

  ?>




  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- AdminLTE App -->
  <script src="<?php echo $path ?>views/assets/js/plugins/adminlte/adminlte.min.js"></script>
  <script src="<?php echo $path ?>views/assets/js/products/products.js"></script>

</body>

</html>