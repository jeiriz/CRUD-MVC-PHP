<?php

require_once 'models/Modelo.php';
class CProducto{
  private $model;


function __construct(){
 $this->model = new Modelo();
 
}

//mostrar
 function mostrar(){
   $producto = new Modelo();
   $dato = $producto->mostrar("productos","1");
   require_once 'views/mostrar.php';
 }

 //insertar
function nuevo(){
    require_once 'views/nuevo.php';
}
//
function guardar(){
    $nombre = $_REQUEST['nombre'];
    $precio = $_REQUEST['precio'];
    //$slug =$_REQUEST['slug'];
    $data = "'$nombre', $precio, null"/*,$slug"*/;
    $producto = new Modelo();
    $dato = $producto->insertar("productos", $data);

    header("Location: index.php");
}

//actualizar
function editar(){
    $id = $_REQUEST['id'];
    $producto = new Modelo();
    $dato = $producto->mostrar("productos","id=$id");
    require_once 'views/editar.php';
}

function update(){
    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $precio = $_REQUEST['precio'];
    $data = "nombre = '$nombre', precio = $precio";
    $condicion = "id=$id";
    $producto = new Modelo();
    $dato = $producto->actualizar("productos", $data, $condicion);

    header("Location: index.php");
}

function eliminar(){
    $id = $_REQUEST['id'];
    $condicion = "id=$id";
    $producto = new Modelo();
    $dato = $producto->eliminar("productos", $condicion);

    header("Location: index.php");
}
}