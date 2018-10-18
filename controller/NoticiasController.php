<?php
require_once  "./view/NoticiasView.php";
require_once  "./model/NoticiasModel.php";
require_once  "./model/BandasModel.php";
require_once  "SecuredController.php";

class NoticiasController extends SecuredController
{
  private $view;
  private $model;
  private $model_band;
  private $Titulo;

  function __construct()
  {
    parent::__construct();
    $this->view = new NoticiasView();
    $this->model = new NoticiasModel();
    $this->model_band = new BandasModel();
    $this->Titulo = "Noticia";
  }

  function MostrarNoticias(){
    $Noticias = $this->model->GetNoticia();
    $Bandas = $this->model_band->GetBanda();
    $this->view->Mostrar($Bandas,$this->Titulo, $Noticias);
  }
  function mostrarNoticia($params){
    $idNoticia =$params[0] ;
    $Noticia = $this->model->GetUnaNoticia($idNoticia);

    $this->view->MostrarNoticia( $Noticia);
  }
  function buscarNoticia(){
    $idNoticia =$_POST["bandasForm"];

    $Noticia = $this->model->GetNoticiasDeBanda($idNoticia);

    $this->view->MostrarNoticias( $Noticia);
  }


  function InsertNoticia(){
    $titulo = $_POST["tituloForm"];
    $descripcion = $_POST["descripcionForm"];
    $banda = $_POST["bandasForm"];
    $this->model->InsertNoticia($banda,$titulo,$descripcion);
    header(NOTICIAS);
  }

  function BorrarNoticia($params){
    $this->model->BorrarNoticia($params[0]);
    header(NOTICIAS);
  }
function renovarNoticia(){
  $titulo = $_POST["tituloForm"];
  $descripcion = $_POST["descripcionForm"];
  $id_noticia = $_POST["id_noticiaForm"];
  $id_banda = $_POST["id_bandaForm"];

  $this->model->EditarNoticia($id_noticia,$id_banda,$titulo,$descripcion);
  header(NOTICIAS);

}

  function FormularioEditarNoticia($params){
    $Noticia = $this->model->GetUnaNoticia($params[0]);

    $titulo_editar="Editar Noticia";
    $this->view->EditarNoticia($titulo_editar, $Noticia[0]);
  }
}

 ?>
