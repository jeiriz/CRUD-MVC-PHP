<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>MVC NUEVO - REGISTRO</title>
</head>
<body>
     <div class="text-center mb-5 mt-5">
      <h1> NUEVO PRODUCTO</h1>
    </div>
    <div class="row mx-4">
    <div class="col-md-6">
       <form action="index.php" method="get">
       <div class="form-group">
         <label for="">Nombre</label>
         <input type="text" name="nombre" class="form-control">
        </div>
        <div class="form-group">
         <label for="">Precio</label>
         <input type="text" name="precio" class="form-control"><br>
         </div>
        <!-- <div class="form-group">
         <label for="">Slug</label>
         <input type="text" name="slug" class="form-control"><br>
         </div>-->
         <input type="submit" name="btnGuardar" class="btn btn-success"><br>

         <input type="hidden" name="op" value ="guardar">
       </form>
       </div>
    </div>
</body>
</html>