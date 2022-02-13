<?php
require_once 'controllers/CProducto.php';
$objProducto = new CProducto();
$op="mostrar";
if(isset($_REQUEST['op']))
$op = $_REQUEST['op'];

if($op=="mostrar")
$objProducto ->mostrar();
elseif($op=="nuevo")
$objProducto ->nuevo();
elseif($op=="guardar")
$objProducto ->guardar();
elseif ($op=="editar") 
$objProducto->editar();
elseif($op=="update")
$objProducto->update();
elseif($op=="eliminar")
$objProducto->eliminar();

?>