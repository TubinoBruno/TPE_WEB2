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
    $sentencia = $this->db->prepare( "select * from usuario where usuario=? limit 1");
    $sentencia->execute(array($usuario));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function InsertUsuario($usuario,$clave){
    $sentencia = $this->db->prepare("INSERT INTO usuario(usuario, clave) VALUES(?,?)");
    $sentencia->execute(array($usuario,$clave));

  }
  function DeleteUsuario($usuario){
    $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id_usuario=?");
        $sentencia->execute(array($usuario));
}
}
 ?>
