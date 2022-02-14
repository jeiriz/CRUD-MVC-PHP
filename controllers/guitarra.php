<?php

require_once 'models/Guitarra.php';
class GuitarraController{
  private $model;


function __construct(){
 $this->model = new GuitarraModel();
 
}

//mostrar
 function mostrar(){
   $producto = new GuitarraModel();
   $dato = $producto->mostrar("guitarra");
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
    $producto = new GuitarraModel();
    $dato = $producto->insertar("guitarra", $data);

    header("Location: index.php");
}

//actualizar
function editar(){
    $id = $_REQUEST['id'];
    $producto = new GuitarraModel();
    $dato = $producto->mostrar("guitarra","id=$id");
    require_once 'views/editar.php';
}

function update(){
    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $precio = $_REQUEST['precio'];
    $data = "nombre = '$nombre', precio = $precio";
    $condicion = "id=$id";
    $producto = new GuitarraModel();
    $dato = $producto->actualizar("guitarra", $data, $condicion);

    header("Location: index.php");
}

function eliminar(){
    $id = $_REQUEST['id'];
    $condicion = "id=$id";
    $producto = new GuitarraModel();
    $dato = $producto->eliminar("guitarra", $condicion);

    header("Location: index.php");
}
}