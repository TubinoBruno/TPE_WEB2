<?php
require_once "Api.php";
require_once "./../model/BandasModel.php";

  class BandasApiController extends Api {
    private $model;
    function __construct(){
      parent::__construct();
      $this->model = new BandasModel;
    }
    function GetBandas($param = null){
      if(isset($param)){
        $id_banda = $param[0];
        $data = $this->model->GetUnaBanda($id_banda);
      }
      else {
        $data = $this->model->GetBanda();

      }
      if(isset($data)){
        return $this->json_response($data,200);
      }
      else {
        return $this->json_response(null,404);
      }
    }
    function DeleteBanda($param = null){
      if (count($param)==1) {
        $id_banda=$param[0];
        $r=$this->model->EliminarBanda($id_banda);
      }
      if($r==false){
        return $this->json_response($r,200);
      }
      else {
        return $this->json_response("no existe",300);
      }
    }
    function InsertBanda($param = null){
      $objetoJSON=$this->getJSONData();
      $r=$this->model->InsertBanda($objetoJSON->nombre,$objetoJSON->estilo);
      return $this->json_response($r,200);
    }
    function UpdateBanda($param = null){
      if (count($param)==1) {
        $id_banda=$param[0];
        $objetoJSON=$this->getJSONData();

        $r=$this->model->actualizarBanda($id_banda,$objetoJSON->Nombre,$objetoJSON->Estilo);

        return $this->json_response($r,200);
      }
      else {
        return $this->json_response("no band specified",300);
      }
    }
}
