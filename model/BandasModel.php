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

  function InsertBanda($nombre,$estilo){
    $sentencia = $this->db->prepare("INSERT INTO banda(nombre, estilo) VALUES(?,?)");
    $sentencia->execute(array($nombre,$estilo));
  }//INSERT INTO `alumnos`( `id_asignatura`, `nombre`, `email`, `nota`, `aprobado`) VALUES (17,"carlos","nfnf@ds.com",4,1)

  function EliminarBanda($idBanda){
    $sentencia = $this->db->prepare("delete from banda where id_banda=?");

    $sentencia->execute([$idBanda]); //atento con la A
  }
  function actualizarBanda($idBanda,$nombre,$estilo){
    $sentencia = $this->db->prepare("UPDATE `banda` SET `id_banda`=?,`nombre`=?,`estilo`=? WHERE  `id_banda`");

     $sentencia->execute([$idBanda,$nombre,$estilo]);

  }

}


 ?>
