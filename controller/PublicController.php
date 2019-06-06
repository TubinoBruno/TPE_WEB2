<?php
require_once  "./view/NovedadesView.php";
require_once  "./model/NoticiasModel.php";

  class PublicController{
    private $view;
    private $model;
    private $model_band;
    private $titulo;

    function __construct()
    {
    $this->view = new NovedadesView();
    $this->model = new NoticiasModel();
    $this->titulo="TRABAJO ESPECIAL 2019";
    $this->titulo1="LIBRES";
    $this->titulo2="OCUPADOS";

  }
function MostrarHome(){
  $this->view->MostrarNovedades($this->titulo);
  }
  function MostrarLibres(){
    $this->view->MostrarLibres($this->titulo1);
    }
    function MostrarOcupados(){
      $this->view->MostrarOcupados($this->titulo2);
      }
      function verOcupados(){
        $ocupado =$_POST["verOcupados"];

        $ocupados = $this->model->GetOcupados($ocupado);
        $this->view->verOcupados($this->titulo2,$ocupados );
        }
        function verLibres(){
          $libre =$_REQUEST["verLibres"];
          $libres = $this->model->GetLibres($libre);

          $this->view->verLibres($this->titulo2,$libres);

          
          }
}



 ?>
