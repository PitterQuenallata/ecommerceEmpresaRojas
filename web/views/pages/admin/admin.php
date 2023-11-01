<link rel="stylesheet" href="<?php echo $path ?>views/assets/css/admin/admin.css">

<?php

if(!isset($_SESSION["admin"])){

    include "login/login.php";
}else{
    include "tablero/tablero.php";
    
}



?>


<script src="<?php echo $path ?>views/assets/js/forms/forms.js"></script>