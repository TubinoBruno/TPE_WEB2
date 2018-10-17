<?php
class NovedadesView extends View{
  function MostrarNovedades($Titulo, $Bandas,$Noticias){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->assign('Bandas',$Bandas);
    $this->smarty->assign('Noticias',$Noticias);
    $this->smarty->display('templates/home.tpl');
  }
}


 ?>
