<?php
if(isset($_POST)){
    
 $producto = $_POST["producto"];
 $cantidad = $_POST["cantidad"];
 $precio = $_POST["precio"];
 $fechasalida = $_POST["fechasalida"];
 $fecha=$_POST["fecha"];
 require("cn.php");


 $insertar = "INSERT INTO ingresodata(producto, cantidad, precio,fecha, fechasalida) VALUES ('$producto', '$cantidad','$precio','$fecha','$fechasalida')";
 
  $resultado = mysqli_query($conexion, $insertar);
   
  if(!$resultado){
    echo json_encode('error');
}
  else{
      echo json_encode('ok');
    
  }


 /* if($producto===''||$cantidad===''||$precio===''||$fecha===''||$opciones===''){
      echo json_encode('error');
  }else{
      echo json_encode('correcto:');
  }*/
 /* if($resultado){
    echo "<script>alert('Se ha registrado el usuario con exito'); window.location='/inventario_chimbote/registrar.php'</script>";
}else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}
 
  */
 
}



?>