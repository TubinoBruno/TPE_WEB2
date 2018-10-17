<?php
class UsuarioModel {
  private $db;

  function __construct() {
    $this->db = $this->Connect();
  }

  function Connect() {
  return new PDO('mysql:host=localhost;'
    .'dbname=noticias_rock;charset=utf8'
    , 'root', '');
  }
  function getUsuario(){
    $sentencia = $this->db->prepare( "select * from usuario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  
  function getUser($usuario){
    $sentencia = $this->db->prepare( "select * from usuario where usuario=?");
    $sentencia->execute(array($usuario));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}

 ?>
