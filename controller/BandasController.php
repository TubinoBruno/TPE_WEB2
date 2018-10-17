<?php
define('BANDAS', 'http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/bandas');
require_once  "./view/BandasView.php";
require_once  "./model/BandasModel.php";
require_once  "SecuredController.php";

class BandasController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();
    $this->view = new BandasView();
    $this->model = new BandasModel();
    $this->Titulo = "Listado de Bandas";
  }

  function TraerLista(){
      $Banda = $this->model->GetBanda();
      $this->view->Mostrar($this->Titulo, $Banda);
  }
  function mostrarBanda($params){
    $idBanda =$params[0] ;
    $Banda = $this->model->GetUnaBanda($idBanda);

    $this->view->MostrarBanda( $Banda);
  }


  function InsertBanda(){
    $nombre = $_POST["nombreForm"];
    $estilo = $_POST["estiloForm"];


    $this->model->InsertBanda($nombre,$estilo);
    header("Location: ".BANDAS);
  }

  function EliminarBanda($params){
      $this->model->EliminarBanda($params[0]);
      header("Location: ".BANDAS);
  }
  function ActualizarBanda(){
    $nombre = $_POST["nombreForm"];
    $estilo = $_POST["estiloForm"];
    $id_banda = $_POST["id_bandaForm"];

    $this->model->actualizarBanda($id_banda,$nombre,$estilo);

    header("Location: ".BANDAS);

  }
  function FormularioEditarBanda($params){
    $Banda = $this->model->GetUnaBanda($params[0]);
    $titulo_editar="Editar Banda";
    $this->view->EditarBanda($titulo_editar, $Banda[0]);
  }


  // function EditarAlumno($id_alumno){
  // $alumno = $this->model->GetAlumno($id_alumno);
  // $this->view->MostrarAlumno($alumno);
  // }
}

 ?>
