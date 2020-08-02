<?php
require "conf_db.php";

$conexion = mysqli_connect( $servidor, $usuario, "" );

$db = mysqli_select_db( $conexion, $basededatos );
?>