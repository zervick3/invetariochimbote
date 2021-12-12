<?php

include("cn.php");

 $id = $_GET["id"];
 
 $eliminar= "DELETE  FROM tiendachimbote WHERE id ='$id'";

 $resul= mysqli_query($conexion, $eliminar);

 if($resul){
     header("Location /inventario_chimbote/actualizar.php");
     echo"alert('Se han Eliminador el registro correctamente') ; window.location='/inventario_chimbote/actualizar.php'";
 }else{
     echo "<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
 }