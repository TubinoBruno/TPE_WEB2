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
      $Banda = $this->model->GetBanda();
      $this->viewAdmin->mostrarBandasAdmin($this->Titulo, $Banda);
  }
  function mostrarBanda($params){
    $idBanda =$params[0] ;
    $Banda = $this->model->GetUnaBanda($idBanda);

    $this->viewAdmin->MostrarBanda( $Banda);
  }
  function mostrarBandaUser($params){
    $idBanda =$params[0] ;
    $Banda = $this->model->GetUnaBanda($idBanda);

    $this->view->MostrarBanda( $Banda);
  }


  function InsertBanda(){
    $nombre = $_POST["nombreForm"];
    $estilo = $_POST["estiloForm"];
    $imagen = $_POST["imagenForm"];



    $this->model->InsertBanda($nombre,$estilo,$imagen);
    header("Location: ".BANDAS);
  }

  function EliminarBanda($params){
      $this->model->EliminarBanda($params[0]);
      header("Location: ".BANDAS);
  }
  function ActualizarBanda(){
    $nombre = $_POST["nombreForm"];
    $estilo = $_POST["estiloForm"];
    $imagen = $_POST["imagenForm"];

    $id_banda = $_POST["id_bandaForm"];

    $this->model->actualizarBanda($id_banda,$nombre,$estilo,$imagen);

    header("Location: ".BANDAS);

  }
  function FormularioEditarBanda($params){
    $Banda = $this->model->GetUnaBanda($params[0]);
    $titulo_editar="Editar Banda";
    $this->viewAdmin->EditarBanda($titulo_editar, $Banda[0]);
  }
function eliminarImagenBanda($params){

  $Banda = $this->model->EliminarImagenBanda($params[0]);

  header("Location: ".BANDAS);
}

}

 ?>
