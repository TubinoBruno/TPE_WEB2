<?php

/**
 *
 */
class NoticiasView extends View
{
  function Mostrar($Banda,$Titulo, $Noticias){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->assign('Noticias',$Noticias);
    $this->smarty->assign('Banda',$Banda);
    $this->smarty->display('templates/noticias.tpl');

  }

  function MostrarNoticia( $Noticia){
    $this->smarty->assign('Noticia',$Noticia[0]);

    $this->smarty->assign('Titulo',"Mostrar Noticia" );

    $this->smarty->display('templates/mostrarNoticiaU.tpl');

  }
  function MostrarNoticias($Noticia){
    $this->smarty->assign('Noticias',$Noticia);
    $this->smarty->assign('Titulo',"Noticias seleccionadas" );

    $this->smarty->display('templates/noticiasSeleccionadas.tpl');
  }

}

 ?>
