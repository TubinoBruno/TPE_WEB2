<?php
class NovedadesView extends View{
  function MostrarNovedades($Titulo, $Bandas,$Noticias){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->assign('Bandas',$Bandas);
    $this->smarty->assign('Noticias',$Noticias);
    $this->smarty->display('templates/home.tpl');
  }
  function MostrarBandas($Titulo, $Bandas){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->assign('Bandas',$Bandas);
    $this->smarty->display('templates/bandasVisitante.tpl');
  }
  function MostrarNoticia( $Noticia){
    $this->smarty->assign('Noticia',$Noticia[0]);
    $this->smarty->assign('Titulo',"Mostrar Noticia" );
    $this->smarty->display('templates/mostrarNoticiaV.tpl');

  }
  function MostrarNoticias($Noticia){
    $this->smarty->assign('Noticias',$Noticia[0]);
    $this->smarty->assign('Titulo',"Noticias Seleccionadas" );
    $this->smarty->display('templates/noticiasSeleccionadasV.tpl');
  }
  function MostrarBanda( $Banda){
    $this->smarty->assign('Banda',$Banda[0]);
    $this->smarty->assign('Titulo',"Mostrar Banda" );
    $this->smarty->display('templates/mostrarBandaV.tpl');

  }
}


 ?>
