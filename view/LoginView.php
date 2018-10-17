<?php
class LoginView extends View{
  function mostarLogin($mensaje=''){
    $this->smarty->assign('Titulo',"Login");
    $this->smarty->assign('Mensaje',$mensaje);
    $this->smarty->display('templates/login.tpl');
  }
  



}


 ?>
