<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Inventario Chimbote</title>
</head>
<body>

    <?php include('index.php'); ?>
   
    <div class="container d-flex flex-row ">
        <div class="row col-6 ">
         
          <div class="titulo mt-3 p-2 "><h2>Inventario Chimbote Metaldryll</h2></div>

        
          <form action="datos.php" method="post" class="row g-3" id="form">
  
     <div class="col-md-11">
         <label for="Producto" class="form-label">PRODUCTO</label>
         <input type="text" name="producto" class="form-control" id="inputEmail4" required>
    </div>

  <div class="col-md-11">
    <label for="cantidad" class="form-label">CANTIDAD</label>
    <input type="text" name="cantidad" class="form-control" id="cantidad" placeholder="Cantidad" required>
  </div>

  <div class="col-md-11">
    <label for="precio" class="form-label">PRECIO</label>
    <input type="text" name="precio" class="form-control" id="precio" placeholder="Precio" required>
  </div>

  
  <div class="col-md-11">
    <label for="inputState" name="opciones" class="form-label">State</label>
    <select id="inputState" name="opciones" class="form-select" required>
      <option selected>...</option>
      <option>SISTEMA DRYWALL</option>
      <option>HERRAMIENTAS</option>   
      <option>CARPINTERIA</option>
      <option>ELECTRICIDAD</option>
      <option>HERRAMIENTAS ELECTRICAS</option>
    </select>
  </div>
  
  <div class="col-12">
    <input type="submit"  id="registrar" class="btn btn-primary" value="Registrar">
  </div>
</form>


    </div>
 
    <div class="row d-flex">
  <div class="col">
    <img src="metal.png" alt="" width="500">
  </div>
   </div>
    
    </div>


    <script src="fetch.js" ></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>