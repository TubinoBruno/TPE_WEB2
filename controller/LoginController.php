<?php

require_once  "./view/LoginView.php";
require_once  "./model/UsuarioModel.php";

  class LoginController
  {
    private $view;
    private $model;
    private $Titulo;
    function __construct()
    {
      $this->view = new LoginView();
      $this->model = new UsuarioModel();
    }
    function login(){
      $this->view->mostarLogin();
    }
    function logout(){
      session_start();
      session_destroy();
      header(LOGIN);
    }

    function verificarLogin(){
      $usuario = $_POST["usuarioId"];
      $password = $_POST["passwordId"];
      $usuario_db = $this->model-> getUser($usuario);
      if (isset($usuario_db)) {
        if(password_verify($password,$usuario_db[0]["clave"])){
          session_start();
          $_SESSION["usuario"]=$usuario;
          header(NOTICIAS);

        }
        else {
          $this->view->mostarLogin("Contraseña incorrecta");

        }
      }
      else {
        $this->view->mostarLogin("No existe el usuario");

      }
    }

}
 ?>
