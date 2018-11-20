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

  function MostrarBanda( $Banda){
    $this->smarty->assign('Banda',$Banda[0]);
    $this->smarty->assign('Titulo',"Noticias Banda" );
    $this->smarty->display('templates/mostrarBandaU.tpl');

  }
}

 ?>
