<?php
 include("cn.php");
 $id = $_GET['id'];
 $datos = "SELECT * FROM tiendachimbote WHERE id = '$id' ";


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
</head>
<body>
    <?php include("index.php");?>
    <div class="tabla container col col-8"> 

     <form action="actunuevo.php" method="post">
     <table class="table table-hover table-reposive mt-2  col col-8">
     <thead class="table-dark ">
              <tr><h2 class="text-center mt-3">INVENTARIO CHIMBOTE</h2></tr>
            <tr>
                <th class="col-7">PRODUCTO</th>
                <th>CANTIDAD</th>
                <th>PRECIO</th>
                <th>CATEGORIA </th>
                
            </tr>
                
            </thead>
     <?php $datos=mysqli_query($conexion,$datos);
            
            while($row = mysqli_fetch_assoc($datos)) { ?>
             
            <input type="hidden" name="id" value="<?php echo $row["id"];?>">
            <tbody class="col col-8">

             <tr>

                <td><?php echo $row["producto"];?></td>
                <td><?php echo $row["cantidad"];?></td>
                <td><?php echo $row["precio"];?></td>
                <td><?php echo $row["categoria"];?></td>
                <td><label for="cantidad"></label> </td>
                
            </tr>

            </tbody>

                 
            

                
          
            <?php } mysqli_free_result($datos); ?>

     </form>    

      
        </table> 
        <div class="row col-4 ">
            <div class="d-flex  justify-content-center">

                <input class="d-flex flex-row btn btn-primary " type="submit" value="Agregar">
                <input class="m-1 p-2"  type="number" name="cantidad2" id="">
            </div>
            
        </div>
    </div>
    <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script>
</body>
</html>