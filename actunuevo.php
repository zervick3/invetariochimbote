<?php 
include("cn.php");
$id = $_POST["id"];
$cantidad2=$_POST["cantidad2"];
/*$datos = "SELECT cantidad FROM inventario WHERE id = '$id' ";
$datos=mysqli_query($conexion,$datos);
while($row = mysqli_fetch_assoc($datos)){
     $row["cantidad"];
}*/

    

$actualizar = "UPDATE tiendachimbote SET cantidad = (cantidad +'$cantidad2') WHERE id='$id'";
    
     $resultado = mysqli_query($conexion, $actualizar);
    



    
    
        
  // actualizar los datos

 if($resultado){
    echo "<script>alert('Se han Actualizado los cambio correctamente') ; window.location='/inventario_chimbote/actualizar.php'</script>";
}else {
    echo "<script>alert('No se pudo actualizar');window.history.go(-1);</script>";
}

?>