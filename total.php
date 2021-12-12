<?php

include("cn.php");

$datos= "SELECT * FROM tiendachimbote ";
 $sql=mysqli_query($conexion,$datos);
 $total =0;
while($row = mysqli_fetch_assoc($sql)){

  $total=$total+$row['precio'];

}
 
  echo $total;


      
  

  
  
  /* $sql = "SELECT COUNT(*) precio FROM tiendachimbote" WHERE precio='precio';
  
   $result = mysqli_query($conexion,$sql);
   $fila = mysqli_fetch_assoc($result);
   echo 'Número de total de registros: ' . $fila['precio'];
*/
?>
  