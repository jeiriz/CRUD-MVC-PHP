<?php

require_once 'models/Usuario.php';

class UsuarioController{
  private $model;


function __construct(){
 $this->model = new UsuarioModel();
 
}

//mostrar
 function mostrar(){
   $producto = new UsuarioModel();
   $dato = $producto->mostrar("usuario","1");
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
    $producto = new UsuarioModel();
    $dato = $producto->insertar("usuario", $data);

    header("Location: index.php");
}

//actualizar
function editar(){
    $id = $_REQUEST['id'];
    $producto = new UsuarioModel();
    $dato = $producto->mostrar("usuario","id=$id");
    require_once 'views/editar.php';
}

function update(){
    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $precio = $_REQUEST['precio'];
    $data = "nombre = '$nombre', precio = $precio";
    $condicion = "id=$id";
    $producto = new UsuarioModel();
    $dato = $producto->actualizar("usuario", $data, $condicion);

    header("Location: index.php");
}

function eliminar(){
    $id = $_REQUEST['id'];
    $condicion = "id=$id";
    $producto = new UsuarioModel();
    $dato = $producto->eliminar("usuario", $condicion);

    header("Location: index.php");
}
}