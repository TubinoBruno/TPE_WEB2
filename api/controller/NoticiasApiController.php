<?php
require_once "Api.php";
require_once "./../model/NoticiasModel.php";

  class NoticiasApiController extends Api {
    private $model;
    function __construct(){
      parent::__construct();
      $this->model = new NoticiasModel;
    }
    function GetNoticias($param = null){
      if(isset($param)){
        $id_noticia = $param[0];
        $data = $this->model->GetUnaNoticia($id_noticia);
      }
      else {
        $data = $this->model->GetNoticia();

      }
      if(isset($data)){
        return $this->json_response($data,200);
      }
      else {
        return $this->json_response(null,404);
      }
    }
    function DeleteNoticia($param = null){
      if (count($param)==1) {
        $id_noticia=$param[0];
        $r=$this->model->BorrarNoticia($id_noticia);
      }
      if(!empty($r)){
        return $this->json_response($r,200);
      }
      else {
        return $this->json_response("no existe",404);
      }
    }
    function InsertNoticia($param = null){
      $arreglo=$this->getJSONData();
      $r=$this->model->InsertNoticia($arreglo->id_banda,$arreglo->Titulo,$arreglo->Descripcion);
      return $this->json_response($r,200);
    }
    function UpdateNoticia($param = null){
      if (count($param)==1) {
        $id_noticia=$param[0];
        $arreglo=$this->getJSONData();

        $r=$this->model->EditarNoticia($id_noticia,$arreglo->id_banda,$arreglo->Titulo,$arreglo->Descripcion);

        return $this->json_response($r,200);
      }

      else {
        return $this->json_response("no news specified",300);
      }
    }
}



 ?>
