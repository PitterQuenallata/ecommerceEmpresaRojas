<link rel="stylesheet" href="<?php echo $path ?>views/assets/css/admin/admin.css">

<?php

if(!isset($_SESSION["admin"])){

    include "login/login.php";
}else{
    if(!empty($routesArray[1])){

        if ($routesArray[1]=="administradores" ||
            $routesArray[1]=="plantillas" ||
            $routesArray[1]=="integraciones" ||
            $routesArray[1]=="slides" ||
            $routesArray[1]=="banners" ||
            $routesArray[1]=="categorias" ||
            $routesArray[1]=="subcategorias" ||
            $routesArray[1]=="inventario" ||
            $routesArray[1]=="mensajes" ||
            $routesArray[1]=="pedidos" ||
            $routesArray[1]=="disputas" ||
            $routesArray[1]=="informes" ||
            $routesArray[1]=="clientes" ||
            $routesArray[1]=="registroVentas" 

        ){

            include $routesArray[1]."/".$routesArray[1].".php";
        }else{

            echo '<script>
                window.location = "'.$path.'404";
            </script>';
        }
        
        

    }else{
        include "tablero/tablero.php";
    }
    
}



?>


<script src="<?php echo $path ?>views/assets/js/forms/forms.js"></script>
<script src="<?php echo $path ?>views/assets/js/tables/tables.js"></script>