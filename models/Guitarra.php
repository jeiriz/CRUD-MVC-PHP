<?php

class GuitarraModel{
   private $productos;
   private $db;

   public function __construct(){
       $this->productos= array();
       $this->db= new PDO('mysql:host=localhost;dbname=final',"root","");
   }
   //mostrar
   public function mostrar($tabla){
       $consulta = "select * from $tabla";
       $resultado = $this->db->query($consulta);
       while($filas=$resultado->FETCHALL(PDO::FETCH_ASSOC)){
          $this->productos[]=$filas;
       }
       return $this->productos;
   }

   //insertar
   public function insertar($tabla,$data){
       $consulta="INSERT INTO $tabla VALUES (null,$data);";
       $resultado = $this->db->query($consulta);
       if($resultado){
          return true;
       }else{
          return false;
       }
   }

   //actualizar
   public function  actualizar($tabla, $data , $condicion){
      $consulta ="UPDATE $tabla SET $data WHERE $condicion;";
      $resultado = $this->db->query($consulta);
      if($resultado){
        return true;
     }else{
        return false;
     }
   }
   //eliminar
    public function eliminar($tabla, $condicion){
        $consulta = "DELETE FROM $tabla WHERE $condicion;";
        $resultado = $this->db->query($consulta);
        if($resultado){
          return true;
       }else{
          return false;
       }
    }
}