<?php

/**
 *
 */
class BandasView extends View
{
  function Mostrar($Titulo, $Bandas){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->assign('Bandas',$Bandas);
    $this->smarty->display('templates/bandas.tpl');
  }
  function EditarBanda($Titulo, $Banda){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->assign('Banda',$Banda);
    $this->smarty->display('templates/EditarBanda.tpl');
  }
  function MostrarBanda( $Banda){
    $this->smarty->assign('Banda',$Banda[0]);
    json_encode($Banda[0]);
    $this->smarty->display('templates/mostrarbanda.tpl');

  }
}

 ?>
