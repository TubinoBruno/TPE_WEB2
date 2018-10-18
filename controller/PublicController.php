<?php
require_once  "./view/NovedadesView.php";
require_once  "./model/NoticiasModel.php";
require_once  "./model/BandasModel.php";

  class PublicController{
    private $view;
    private $model;
    private $model_band;
    private $titulo;

    function __construct()
    {
    $this->view = new NovedadesView();
    $this->model = new NoticiasModel();
    $this->model_band = new BandasModel();
    $this->titulo="Novedades";
    $this->titulo_b="Novedades";

  }
function mostrarNovedades(){
  $Noticias = $this->model->GetNoticia();
  $Bandas = $this->model_band->GetBanda();
  $this->view->MostrarNovedades($this->titulo,$Bandas,$Noticias);
  }
  function mostrarBandas(){
    $Bandas = $this->model_band->GetBanda();
    $this->view->MostrarBandas($this->titulo_b,$Bandas);

    }
    function mostrarNoticia($params){
      $idNoticia =$params[0] ;
      $Noticia = $this->model->GetUnaNoticia($idNoticia);

      $this->view->MostrarNoticia( $Noticia);
    }
    function mostrarBanda($params){
      $idBanda =$params[0] ;
      $Banda = $this->model_band->GetUnaBanda($idBanda);

      $this->view->MostrarBanda( $Banda);

    }
    function filtrarNoticia(){
      $idNoticia =$_POST['bandasForm'];
      echo json_encode($idNoticia);
      $Noticia = $this->model->GetNoticiasDeBanda($idNoticia);

      $this->view->MostrarNoticias( $Noticia);
    }

}



 ?>
