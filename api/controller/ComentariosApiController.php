<?php
require_once "Api.php";
require_once "./../model/ComentariosModel.php";

  class ComentariosApiController extends Api {
    private $model;
    function __construct(){
      parent::__construct();
      $this->model = new ComentariosModel;
    }
    function GetComentarios($param = null){
      if(isset($param)){
        $id_banda = $param[0];
        $data = $this->model->GetComentario($id_banda);
      }
      else {
        $data = $this->model->GetComentario();

      }
      if(isset($data)){
        return $this->json_response($data,200);
      }
      else {
        return $this->json_response(null,404);
      }
    }
    function DeleteComentario($param = null){
      if (count($param)==1) {
        $id_comentario=$param[0];
        $r=$this->model->BorrarComentario($id_comentario);
      }
      if($r==false){
        return $this->json_response($r,200);
      }
      else {
        return $this->json_response("no existe",300);
      }
    }
    function InsertComentario($param = null){
      $objetoJSON=$this->getJSONData();
      $r=$this->model->InsertComentario($objetoJSON->comentario,$objetoJSON->puntaje,$objetoJSON->id_banda,$objetoJSON->id_usuario);
      return $this->json_response($r,200);
    }
    function UpdateBanda($param = null){
      if (count($param)==1) {
        $id_comentario=$param[0];
        $objetoJSON=$this->getJSONData();

        $r=$this->model->EditarComentario($id_comentario,$objetoJSON->comentario,$objetoJSON->puntaje,$objetoJSON->id_banda,$objetoJSON->id_usuario);

        return $this->json_response($r,200);
      }
      else {
        return $this->json_response("no task specified",300);
      }
    }
}
