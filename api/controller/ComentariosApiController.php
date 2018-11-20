<?php
require_once "Api.php";
require_once "./../model/ComentariosModel.php";

class ApiControllerSinSesion extends Api{
  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new ComentariosModel();
  }
  function getComentarios($param = null){
    if(isset($param)){
        $id_banda = $param[0];
        $arreglo = $this->model->getComentario($id_banda);
        $data = $arreglo;
    }else{
      $data = $this->model->getComentarios();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }
}
 ?>
