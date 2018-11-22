<?php
require_once  "./view/ViewAdmin.php";

require_once  "./model/UsuarioModel.php";
require_once  "SecuredController.php";

class AdminController extends SecuredController
{
  private $view;

  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();
    $this->view = new ViewAdmin();
    $this->model = new UsuarioModel();
    $this->Titulo = "Panel Admin";
  }
  function mostrarUsuarios(){
    if ($_SESSION["admin"]==1) {

      $Usuarios = $this->model->GetUsuario();
      $id_usuario=$_SESSION["id_usuario"];
      $this->view->MostrarUsuarios($Usuarios,$id_usuario);
    }
    else{
      header(NOTICIAS);
    }
  }
  function borrarUsuario($param){
    if ($_SESSION["admin"]==1) {
      if(isset($params)){

      $id_usuario=$param[0];
       $this->model->DeleteUsuario($id_usuario);
       $Usuarios = $this->model->GetUsuario();
      $this->view->MostrarUsuarios($Usuarios);
    }
    }
    else{
      header(NOTICIAS);
    }
  }
  function insertarAdmin($param){
    if ($_SESSION["admin"]==1) {
      if(isset($params)){

      $id_usuario=$param[0];
       $this->model->darPermiso($id_usuario);
       $Usuarios = $this->model->GetUsuario();
      $this->view->MostrarUsuarios($Usuarios);
    }
  }
    else{
      header(NOTICIAS);
    }
  }
  function quitarAdmin($param){
    if ($_SESSION["admin"]==1) {
      if(isset($params)){

      $id_usuario=$param[0];
       $this->model->quitarPermiso($id_usuario);
       $Usuarios = $this->model->GetUsuario();
      $this->view->MostrarUsuarios($Usuarios);
    }
  }
    else{
      header(NOTICIAS);
    }
  }
}

 ?>
