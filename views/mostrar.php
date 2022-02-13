<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CRUD - MVC</title>
</head>
<body>
    <div>
      <h1 class="text-center">PRODUCTOS</h1>
    </div>
    <div>
       <p><a href="index.php?op=nuevo" class="btn btn-success">NUEVO</a></p>
    </div class="row">
     <div class="col-md-6">
     <table class="table text-center">
      <tr class="thead-dark">
      <th>Id</th>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Acciones</th>
      </tr>
      <tr>
      <?php
       foreach( $dato as $key => $value ) {
         foreach($value as $va){ ?>
           <tr>
              <td><?php echo $va['id'] ;?></td>
              <td><?php echo $va['nombre'] ;?></td>
              <td><?php echo $va['precio'] ;?></td>
              <td><a class="btn btn-info" href="index.php?op=editar&id=<?php echo $va['id'] ;?>">Actualizar</a>
              <a class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar el registro?')"  href="index.php?op=eliminar&id=<?php echo $va['id'] ;?>">Eliminar</a>
              <a class="btn btn-primary" href="producto/editar/<?php echo $va['id'] ;?>/<?php echo $va['slug'] ;?>">Actualizar</a>
              </td>
        
           </tr>

         <?php }
         }?>
      </tr>
     </table>
     </div>
     </div>
    <?php ?>
</body>
</html>