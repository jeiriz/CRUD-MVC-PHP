<html lang ="es" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <head>
        <meta charset="UTF-8">
        <title>MVC NUEVO REGISTRO</title>
    </head>
    <body>
        <div class="mb-5 mt-5">
            <h1 class="text-center">EDITAR</h1>
            <hr>
            <div class="row mx-4">
              <div class="col-md-6">
             <form action="">
                <?php foreach ($dato as $key => $value): ?>
                <?php foreach ($value as $va ): ?>
                 <input type="hidden" name="id" value="<?php echo $va['id'] ?>">
                 <div class="form-group">
                    <label for="">NOMBRE</label> <br>
                    <input class="form-control" type="text" name="nombre" value="<?php echo $va['nombre'] ?>">
                    </div>
                    <div class="form-group">
                    <label for="">PRECIO</label><br>
                    <input class="form-control" type="text" name="precio" value="<?php echo $va['precio'] ?>"><br>
                    </div>
                    <input type="submit" name="btn" value="ACTUALIZAR" class="btn btn-success">
                <?php endforeach ?>
                <?php endforeach ?>
                    <input type="hidden" name="op" value="update">
            </form>
            </div>
            </div>
        </div>
    </body>
</html>