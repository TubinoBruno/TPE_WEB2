<?php
class NovedadesView extends View{
  function MostrarNovedades($Titulo){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->display('templates/home.tpl');
  }
  function MostrarOcupados($Titulo){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->display('templates/ocupados.tpl');
  }
  function MostrarLibres($Titulo){
    $this->smarty->assign('Titulo',$Titulo );
    
    $this->smarty->display('templates/libres.tpl');
  }
  function verLibres($Titulo,$libres){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->assign('Libres',$libres );

    $this->smarty->display('templates/verLibres.tpl');
  }
  function verOcupados($Titulo,$ocupados){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->assign('Ocupados',$ocupados );

    $this->smarty->display('templates/verOcupados.tpl');
  }
}


 ?>
