<?php
/**
 *
 */
class BandasModel {
  private $db;

  function __construct() {
    $this->db = $this->Connect();
  }

  function Connect() {
  return new PDO('mysql:host=localhost;'
    .'dbname=noticias_rock;charset=utf8'
    , 'root', '');
  }

  function GetBanda(){
      $sentencia = $this->db->prepare( "select * from banda");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function GetUnaBanda($id_banda){
      $sentencia = $this->db->prepare( "select * from banda where id_banda=?");
      $sentencia->execute([$id_banda]);
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertBanda($nombre,$estilo,$url){
    $sentencia = $this->db->prepare("INSERT INTO banda(nombre, estilo,url) VALUES(?,?,?)");
    $sentencia->execute(array($nombre,$estilo,$url));
    $lastId=$this->db->lastInsertId();
    return $this->GetUnaBanda($lastId);



  }

  function EliminarBanda($idBanda){
    $banda=$this->GetUnaBanda($idBanda);
    if(isset($banda)){
      $sentencia = $this->db->prepare("delete from banda where id_banda=?");
      $sentencia->execute([$idBanda]);
      return $banda;
    }
  }

    function EliminarImagenBanda($idBanda){
      $banda=$this->GetUnaBanda($idBanda);

      if(isset($banda)){

        $sentencia = $this->db->prepare("UPDATE `banda` SET `url`=null WHERE  `id_banda`=?");
        $sentencia->execute([$idBanda]);
        return $banda;
      }
    }
  function actualizarBanda($idBanda,$nombre,$estilo,$url){
    $sentencia = $this->db->prepare("UPDATE `banda` SET `nombre`=?,`estilo`=?,`url`=? WHERE  `id_banda`=?");

     $sentencia->execute([$nombre,$estilo,$url,$idBanda]);
     $banda=$this->GetUnaBanda($idBanda);
     return $banda;

  }

}


 ?>
