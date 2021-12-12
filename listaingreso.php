<?php
require('cn.php');
$datos = "SELECT * FROM ingresodata  ORDER BY id";

$sql=mysqli_query($conexion,$datos);

foreach($sql as $data){
    
    echo "<tr>
    <td>".$data['producto']."</td>
    <td>".$data['cantidad']."</td>
    <td>".$data['precio']."</td>
    <td>".$data['fecha']."</td>
    <td>".$data['fechasalida']."</td>
    
    
    </tr> " ;
}

?>