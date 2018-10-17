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
  }
function mostrarNovedades(){
  $Noticias = $this->model->GetNoticia();
  $Bandas = $this->model_band->GetBanda();
  $this->view->MostrarNovedades($this->titulo,$Bandas,$Noticias);
  }
}



 ?>
