<?php
require_once  "./view/NoticiasView.php";
require_once  "./view/ViewAdmin.php";

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
    $this->viewAdmin = new ViewAdmin();

    $this->model = new NoticiasModel();
    $this->model_band = new BandasModel();
    $this->Titulo = "Noticia";
  }

  function MostrarNoticias(){
    $Noticias = $this->model->GetNoticia();
    $Bandas = $this->model_band->GetBanda();
    $this->view->Mostrar($Bandas,$this->Titulo, $Noticias);
  }
  function MostrarNoticiasAdmin(){
    if ($_SESSION["admin"]==1) {

    $Noticias = $this->model->GetNoticia();
    $Bandas = $this->model_band->GetBanda();
    $this->viewAdmin->Mostrar($Bandas,$this->Titulo, $Noticias);
  }
    else{
      header(NOTICIAS);
    }
  }
  function mostrarNoticia($params){
    if ($_SESSION["admin"]==1) {
      if(isset($params)){
        $idNoticia =$params[0] ;
        $Noticia = $this->model->GetUnaNoticia($idNoticia);

        $this->viewAdmin->MostrarNoticia( $Noticia);
      }

  }
    else{
      header(NOTICIAS);
    }
  }
  function mostrarNoticiaUser($params){
    if(isset($params)){

    $idNoticia =$params[0] ;
    $Noticia = $this->model->GetUnaNoticia($idNoticia);

    $this->view->MostrarNoticia( $Noticia);
  }
  }
  function buscarNoticia(){

    $idNoticia =$_POST["bandasForm"];

    $Noticia = $this->model->GetNoticiasDeBanda($idNoticia);

    $this->view->MostrarNoticias( $Noticia);

  
  }


  function InsertNoticia(){
    if ($_SESSION["admin"]==1) {

    $titulo = $_POST["tituloForm"];
    $descripcion = $_POST["descripcionForm"];
    $banda = $_POST["bandasForm"];
    $this->model->InsertNoticia($banda,$titulo,$descripcion);
    header(ADMIN);
  }
    else{
      header(NOTICIAS);
    }
  }

  function BorrarNoticia($params){
    if ($_SESSION["admin"]==1) {
      if(isset($params)){

    $this->model->BorrarNoticia($params[0]);
    header(ADMIN);
  }
}
    else{
      header(NOTICIAS);
    }
  }
function renovarNoticia(){
  if ($_SESSION["admin"]==1) {

  $titulo = $_POST["tituloForm"];
  $descripcion = $_POST["descripcionForm"];
  $id_noticia = $_POST["id_noticiaForm"];
  $id_banda = $_POST["id_bandaForm"];

  $this->model->EditarNoticia($id_noticia,$id_banda,$titulo,$descripcion);
  header(ADMIN);
}
  else{
    header(NOTICIAS);
  }
}

  function FormularioEditarNoticia($params){
    if ($_SESSION["admin"]==1) {
      if(isset($params)){

    $Noticia = $this->model->GetUnaNoticia($params[0]);

    $titulo_editar="Editar Noticia";
    $this->viewAdmin->EditarNoticia($titulo_editar, $Noticia[0]);
  }
  }
    else{
      header(NOTICIAS);
    }
  }
}

 ?>
