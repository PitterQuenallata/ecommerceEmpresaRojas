<?php

if (!isset($_SESSION["admin"])){
    include "login/login.php";
}else{
    include "tablero/tablero.php";
}


?>


