<?php
 include("cn.php");

 $datos = "SELECT * FROM tiendachimbote ";




?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="descontarventa.css">
    <title>ventas chimbote</title>
</head>
<body>
    <?php include('index.php');?>
    <div class="tabla container col col-8"> 
      <table class="table table-bordered border-primary mt-2  col col-7">
      
            <thead class="table-dark ">
              <tr><h2 class="text-center mt-3">VENTA DE CHIMBOTE</h2></tr>
            <tr>
                <th class="col-8">PRODUCTO</th>
                <th>CANTIDAD</th>
                <th>PRECIO</th>
                <th>CATEGORIA</th>
                <th>VENTAS</th>
                
            </tr>
            
            <form class="row g-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
           
            <div class="row">
               
               <div class="col">
               <input type="text" name="buscar" id="" placeholder="BUSCAR" class="form-control form-control-lg">
               </div>

               <div class="col p-1">
                 <input type="submit" value="Buscar" class="btn btn-primary mb-3">
               </div>
              
              
            
            </div>
           

            <?php $datos = @("SELECT * FROM tiendachimbote WHERE producto LIKE '%".$_POST['buscar']."%' ");?>
            </form> 

            </thead>
            <?php $datos=mysqli_query($conexion,$datos);
            
            while($row = mysqli_fetch_assoc($datos)) { ?>
            <input type="hidden" name="id" value="<?php echo $row["id"];?>">
             <tbody>

               <tr>

                <td><?php echo $row["producto"];?></td>
                <td><?php echo $row["cantidad"];?></td>
                <td><?php echo $row["precio"];?></td>
                <td><?php echo $row["categoria"];?></td>
                <td><a class="btn btn-primary" href="buttonventa.php?id=<?php echo $row["id"];?>" role="button">Venta</a></td>
               
              </tr>

             </tbody>
            
          
            <?php } mysqli_free_result($datos); ?>
           

      </table>


    </div>
  
</body>
</html>