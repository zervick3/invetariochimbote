<?php
$conexion = mysqli_connect("localhost","root","","inventario2");
/*if(!$conexion){
    echo 'Error al conectar a la base de datos';
}else{
    echo 'Conectado a la base de datos';
}*/
mysqli_set_charset($conexion,"utf8");
?>