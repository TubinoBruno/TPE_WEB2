<?php
require_once "ApiSecured.php";
require_once "./../model/ComentariosModel.php";
class ApiController extends ApiSecured{
  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new ComentariosModel();
  }
  function getComentarios($param = null){
    if(isset($param)){
        $id_producto = $param[0];
        $arreglo = $this->model->getComentario($id_producto);
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
  function BorrarComentario($param = null){
    if(count($param) == 1){
        $id_comentario = $param[0];
        $response =  $this->model->BorrarComentario($id_comentario);
        if($response == false){
          return $this->json_response($response, 300);
        }
        return $this->json_response($response, 200);
    }else{
      return  $this->json_response("No comment specified", 300);
    }
  }
  function InsertComentario(){
    $objetoJson = $this->getJSONData();
    if (isset($objetoJson)) {
      $r=$this->model->InsertComentario($objetoJSON->comentario,$objetoJSON->puntaje,$objetoJSON->id_banda,$objetoJSON->id_usuario);
      return $this->json_response($response, 200);
    }
    else {
      return $this->json_response("No Comment specified", 300);
    }
  }
}
 ?>
