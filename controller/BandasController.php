<?php
define('BANDAS', 'http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/bandasAdm');
require_once  "./view/BandasView.php";
require_once  "./view/ViewAdmin.php";

require_once  "./model/BandasModel.php";
require_once  "SecuredController.php";

class BandasController extends SecuredController
{
  private $view;
  private $viewAdmin;

  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();
    $this->view = new BandasView();
    $this->viewAdmin = new ViewAdmin();
    $this->model = new BandasModel();
    $this->Titulo = "Listado de Bandas";
  }

  function TraerLista(){
      $Banda = $this->model->GetBanda();
      $this->view->Mostrar($this->Titulo, $Banda);
  }
  function mostrarBandasAdmin(){
    if ($_SESSION["admin"]==1) {

      $Banda = $this->model->GetBanda();
      $this->viewAdmin->mostrarBandasAdmin($this->Titulo, $Banda);
    }
      else{
        header(NOTICIAS);
      }
  }
  function mostrarBanda($params){
    if ($_SESSION["admin"]==1) {
      if(isset($params)){

    $idBanda =$params[0] ;
    $Banda = $this->model->GetUnaBanda($idBanda);

    $this->viewAdmin->MostrarBanda( $Banda);
  }
}
    else{
      header(NOTICIAS);
    }
  }
  function mostrarBandaUser($params){
    if(isset($params)){

    $idBanda =$params[0] ;
    $Banda = $this->model->GetUnaBanda($idBanda);

    $this->view->MostrarBanda( $Banda);
  }
  }


  function InsertBanda(){
    if ($_SESSION["admin"]==1) {

    $nombre = $_POST["nombreForm"];
    $estilo = $_POST["estiloForm"];
    $imagen = $_POST["imagenForm"];



    $this->model->InsertBanda($nombre,$estilo,$imagen);
    header("Location: ".BANDAS);
  }
    else{
      header(NOTICIAS);
    }
  }

  function EliminarBanda($params){
    if ($_SESSION["admin"]==1) {
      if(isset($params)){

      $this->model->EliminarBanda($params[0]);
      header("Location: ".BANDAS);
    }
  }
      else{
        header(NOTICIAS);
      }
  }
  function ActualizarBanda(){
    if ($_SESSION["admin"]==1) {

    $nombre = $_POST["nombreForm"];
    $estilo = $_POST["estiloForm"];
    $imagen = $_POST["imagenForm"];

    $id_banda = $_POST["id_bandaForm"];

    $this->model->actualizarBanda($id_banda,$nombre,$estilo,$imagen);

    header("Location: ".BANDAS);
  }
  else{
    header(NOTICIAS);
  }

  }
  function FormularioEditarBanda($params){
    if ($_SESSION["admin"]==1) {
      if(isset($params)){

    $Banda = $this->model->GetUnaBanda($params[0]);
    $titulo_editar="Editar Banda";
    $this->viewAdmin->EditarBanda($titulo_editar, $Banda[0]);
  }
}
  else{
    header(NOTICIAS);
  }
  }
function eliminarImagenBanda($params){
  if ($_SESSION["admin"]==1) {
    if(isset($params)){

  $Banda = $this->model->EliminarImagenBanda($params[0]);

  header("Location: ".BANDAS);
}
}
else{
  header(NOTICIAS);
}
}

}

 ?>
