<?php
class NoticiasModel  {
  private $db;

  function __construct() {
   $this->db = $this->Connect();
  }

function Connect() {
return new PDO('mysql:host=localhost;'
  .'dbname=noticias_rock;charset=utf8'
  , 'root', '');
}

function GetComentario(){
    $sentencia = $this->db->prepare( "select * FROM comentarios ");

    $sentencia->execute();

    return $sentencia->fetchAll(PDO::FETCH_ASSOC);

}
function GetComentario($id_comentario){
  $sentencia = $this->db->prepare( "select * FROM comentarios where id_comentario = ? ");

    $sentencia->execute([$id_comentario]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);


}
function GetComentarioDeBanda($id_banda){
  $sentencia = $this->db->prepare( "select * FROM comentarios LEFT JOIN banda ON comentarios.id_banda = banda.id_banda where comentarios.id_banda = ?" );
  $sentencia->execute([$id_banda]);
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);


}



function InsertComentario($comentario,$puntaje,$id_banda,$id_user){
  $sentencia = $this->db->prepare("insert INTO comentarios(comentario,puntaje, id_banda,id_usuario) VALUES(?,?,?)");
  $sentencia->execute(array($comentario,$puntaje,$id_banda,$id_user));
  $lastId=$this->db->lastInsertId();
  return $this->GetComentario($lastId);
}

function BorrarComentario($idComentario){
  $comentario=$this->GetComentario($lastId);
  if(isset($comentario)){
    $sentencia = $this->db->prepare("delete from noticias where id_noticia=?");
    $sentencia->execute(array($idNoticia));
    return $comentario;
  }

}
function EditarComentario($id_comentario,$comentario,$puntaje,$id_banda,$id_user){

  $sentencia = $this->db->prepare("UPDATE `comentarios` SET `comentario`=?,`puntaje`=?,`id_banda`=?,`id_usuario`=? WHERE `id_comentario`=?");
  $sentencia->execute([$comentario,$puntaje,$id_banda,$id_user,$id_comentario]);
}


 ?>
