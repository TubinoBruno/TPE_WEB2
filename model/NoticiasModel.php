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
return new PDO('pgsql:host=dbases.exa.unicen.edu.ar;port=5432;dbname=cursada;user=unc_249018;password=249018');
}

function GetOcupados($ocupado){
    $sentencia = $this->db->prepare( "select * FROM fila ");

    $sentencia->execute();

    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    
}
function GetLibres($libre){
    $sentencia = $this->db->prepare( "select ");

    $sentencia->execute([$id_noticia]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);


}



}


 ?>
