<?php
if(isset($_POST)){
    
 $producto = $_POST["producto"];
 $cantidad = $_POST["cantidad"];
 $precio = $_POST["precio"];
 $opciones = $_POST["opciones"];
 require("cn.php");


 $insertar = "INSERT INTO tiendachimbote(producto, cantidad, precio, categoria) VALUES ('$producto', '$cantidad','$precio','$opciones')";
 
  $resultado = mysqli_query($conexion, $insertar);
  
  if($resultado){
    echo "<script>alert('Se ha registrado el usuario con exito'); window.location='/inventario_chimbote/registrar.php'</script>";
}else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}
 
  
 
}



?>