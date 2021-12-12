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

<div class="row col-4 p-3 m-2 ">

<div class="row col-12">
  
         

        
          <form  method="post" class="d-flex flex-wrap col-12" id="formulario">
  
      
         <div class="d-flex flex-row">
         <input type="text" name="producto" class="col-12 p-1 m-2" id="inputEmail4" placeholder="PRODUCTO" required>
    

  
    
    <input type="text" name="cantidad" class="col-12 p-1 m-2" id="cantidad" placeholder="CANTIDAD" required>
  

  
    
    <input type="text" name="precio" class="col-12 p-1 m-2" id="precio" placeholder="PRECIO" required>
  </div>
    
  <div class="d-flex flex-row">
    <label for="fecha" class="col-5  p-1 ">FECHA INGRESO</label>
    <input type="date" name="fecha" class="col-5 p-1 m-2 " id="fecha" placeholder="fecha" required>
  

  
    <label for="fechasalida" class="col-5 p-1 ">FECHA SALIDA</label>
    <input type="date" name="fechasalida" class="col-5 p-1 m-2" id="fechasalida" placeholder="fecha" >
  
  </div>
  
    <input type="submit"  class="btn btn-primary mt-1  p-2 m-1" value="REGISTRAR">
    <input type="button" id="imp" onclick="imprimir()" class="btn btn-danger mt-1 m-1 p-2 " value="IMPRIMIR">
  
  
</form>

</div>

         <div class="row" id="resultadoTotal"></div>
          
</div>

  
 
    
   </div>  
   <div class="container">
   <div class="row col-12" >

   <table class="table table-bordered border-primary   col col-6">
            
            <thead class="table-dark ">
            <tr><h4 class="text-center mt-4">LISTA INGRESO MATERIALES</h4></tr>
            <tr>
                <th class="col-7 ">PRODUCTO</th>
                <th>CANTIDAD</th>
                <th>PRECIO</th>
                <th class="col-3">FECHA INGRESO</th>
                <th class="col-3">FECHA SALIDA </th>
                
            </tr>
            </thead>
            <tbody id="listaingreso">

            </tbody>



   </table>
   </div>


    
</div>

    <script src="fetch.js" ></script>
    <script >
      function imprimir(){
  window.print('')
}
  
    </script>
</body>
</html>