<?php
class LoginView extends View{
  function mostrarLogin($mensaje=''){
    $this->smarty->assign('Titulo',"Login");
    $this->smarty->assign('Mensaje',$mensaje);
    $this->smarty->display('templates/login.tpl');
  }
  function mostrarRegistro($mensaje=''){
    $this->smarty->assign('Titulo',"Registro");
    $this->smarty->assign('Mensaje',$mensaje);
    $this->smarty->display('templates/registro.tpl');
  }



}


 ?>
