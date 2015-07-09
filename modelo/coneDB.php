<?php 
 class Conexion extends PDO { 

   private $tipo_de_base = 'mysql';       //todos los atributos privados
   private $host = 'localhost';
   private $nombre_de_base = 'm2000225_fn';
   private $usuario = 'root'; 
   private $contrasena = 'root';

   public function __construct() { //modificando el construcctor de pdo (parent invoca al constructor padre)
      try{
         parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base, $this->usuario, $this->contrasena);
      }catch(PDOException $e){
         throw new Exception();
         exit;
      }
   } 
 } 
?>
