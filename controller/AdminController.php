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
      $Usuarios = $this->model->GetUsuario();
      $this->view->MostrarUsuarios($Usuarios);
  }
  function borrarUsuario($param){
      $id_usuario=$param[0];
       $this->model->DeleteUsuario($id_usuario);
       $Usuarios = $this->model->GetUsuario();
      $this->view->MostrarUsuarios($Usuarios);
  }
  function insertarAdmin($param){
      $id_usuario=$param[0];
       $this->model->darPermiso($id_usuario);
       $Usuarios = $this->model->GetUsuario();
      $this->view->MostrarUsuarios($Usuarios);
  }
  function quitarAdmin($param){
      $id_usuario=$param[0];
       $this->model->quitarPermiso($id_usuario);
       $Usuarios = $this->model->GetUsuario();
      $this->view->MostrarUsuarios($Usuarios);
  }
}

 ?>
