<?php
/**
 *
 */
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

function GetNoticia(){
    $sentencia = $this->db->prepare( "select * FROM noticias LEFT JOIN banda ON noticias.id_banda = banda.id_banda");

    $sentencia->execute();

    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
function GetUnaNoticia($id_noticia){
    $sentencia = $this->db->prepare( "select * FROM noticias LEFT JOIN banda ON noticias.id_banda = banda.id_banda where id_noticia=?");

    $sentencia->execute([$id_noticia]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);


}
function GetNoticiasDeBanda($id_banda){
  $sentencia = $this->db->prepare( "select * FROM noticias LEFT JOIN banda ON noticias.id_banda = banda.id_banda where noticias.id_banda = ?" );
  $sentencia->execute([$id_banda]);
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);

}


function InsertNoticia($banda,$titulo,$descripcion){
  $sentencia = $this->db->prepare("insert INTO noticias(id_banda,titulo, descripcion) VALUES(?,?,?)");
  $sentencia->execute(array($banda,$titulo,$descripcion));
}

function BorrarNoticia($idNoticia){
  $sentencia = $this->db->prepare("delete from noticias where id_noticia=?");
  $sentencia->execute(array($idNoticia));
}
function EditarNoticia($id_noticia,$id_banda,$titulo,$descripcion){

  $sentencia = $this->db->prepare("UPDATE `noticias` SET `id_banda`=?,`titulo`=?,`descripcion`=? WHERE `id_noticia`=?");
  $sentencia->execute([$id_banda,$titulo,$descripcion, $id_noticia]);
}


}


 ?>
