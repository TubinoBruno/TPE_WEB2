<?php

/**
 *
 */
class ViewAdmin extends View
{
  function Mostrar($Banda,$Titulo, $Noticias){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->assign('Noticias',$Noticias);
    $this->smarty->assign('Banda',$Banda);
    $this->smarty->display('templates/noticiasAdmin.tpl');

  }
  function EditarNoticia($Titulo, $Noticias){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->assign('Noticias',$Noticias);
    $this->smarty->display('templates/EditarNoticia.tpl');

  }
  function MostrarNoticia( $Noticia){
    $this->smarty->assign('Noticia',$Noticia[0]);
    $this->smarty->assign('Titulo',"Mostrar Noticia" );

    $this->smarty->display('templates/mostrarnoticia.tpl');

  }
  function MostrarNoticias($Noticia){
    $this->smarty->assign('Noticias',$Noticia);
    $this->smarty->assign('Titulo',"Noticias seleccionadas" );

    $this->smarty->display('templates/noticiasSeleccionadasAdmin.tpl');
  }
  function mostrarBandasAdmin($Titulo, $Bandas){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->assign('Bandas',$Bandas);
    $this->smarty->display('templates/bandasAdmin.tpl');
  }
  function EditarBanda($Titulo, $Banda){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->assign('Banda',$Banda);
    $this->smarty->display('templates/EditarBanda.tpl');
  }
  function MostrarBanda( $Banda){
    $this->smarty->assign('Banda',$Banda[0]);
    $this->smarty->assign('Titulo',"Noticias Banda" );
    $this->smarty->display('templates/mostrarbanda.tpl');

  }
  function MostrarUsuarios( $Usuarios,$id_usuario){
    $this->smarty->assign('Usuarios',$Usuarios);
    $this->smarty->assign('id_usuario',$id_usuario);

    $this->smarty->assign('Titulo',"Panel" );
    $this->smarty->display('templates/adminPanel.tpl');

  }


}

 ?>
