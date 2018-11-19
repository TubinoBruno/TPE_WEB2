
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
      $this->view->mostrarLogin();
    }
    function logout(){
      session_start();
      session_destroy();
      header(LOGIN);
    }
    function registrar(){
      $this->view->mostrarRegistro();
    }
    function verificarRegistro(){
      if(!empty($_POST['usuarioId']) && !empty($_POST['passwordId'])){
      $user = $_POST["usuarioId"];
      $pass = password_hash($_POST["passwordId"], PASSWORD_DEFAULT);
      $dbUser = $this->model->getUser($user);
      if(!isset($dbUser[0])){
        $this->model->InsertUsuario($user,$pass);
        $this->verificarLogin();
        header(NOTICIAS);

      }
      else{
        $this->view->mostrarRegistro("Usuario Existente");
      }
    }
    else {
      $this->view->mostrarRegistro("Complete todos los campos");
    }

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
