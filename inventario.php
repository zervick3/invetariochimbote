
<?php
 include("cn.php");

 $datos = "SELECT * FROM tiendachimbote  ORDER BY categoria ";

 

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>resultado</title>
</head>
<body>
     
<?php include('index.php');?>
<div class="tabla container col col-11 d-flex"> 
  <div class="row">
      <table class="table table-bordered border-primary mt-2  col col-9 ">
      
            <thead class="table-dark ">
              <tr><h2 class="text-center mt-3">Inventario Chimbote Metaldryll</h2></tr>
            <tr>
                <th class="col-8 ">PRODUCTO</th>
                <th>CANTIDAD</th>
                <th>PRECIO</th>
                <th class="col-3">CATEGORIA </th>
                <th>TOTAL</th>
            </tr>
                
            </thead>
            <?php $datos=mysqli_query($conexion,$datos);
            $total=0;
            while($row = mysqli_fetch_assoc($datos)) { ?>
             <tbody>

               <tr>

                <td><?php echo $row["producto"];?></td>
                <td class="cantidad" ><?php  echo $row["cantidad"];?></td>
                <td><?php echo $row["precio"];?></td>
                <td><?php echo $row["categoria"];?></td>
                <td><?php echo $row["cantidad"]*$row["precio"]; ?></td>
                <?php 
                $resul= $row["cantidad"]*$row["precio"];
                
                 $total = $total + $resul;

                ?>
           
              </tr>

             </tbody>
            
          
            <?php } mysqli_free_result($datos); ?>
           

      </table>
      </div>
  <div class="alert alert-success m-5 p-3 col-4"  role="alert" style="height: 25%" >

    <div class="col">
      <h4>CAPITAL EN PRODUCTO</h4>
    <h4 class="mt-1">S/ <?php echo $total?> </h4>  
    </div>
    
         <div class="col">
           <button class="btn btn-primary" id="imprimir" onclick="imprimir()" > imprimir</button>
         </div>    
             </div>
  
<script>

  
  
function imprimir(){
  window.print('')
}
    
 
  
</script>
<script src="cantidades.js"></script>
</body>
</html>