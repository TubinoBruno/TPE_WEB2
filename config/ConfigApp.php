<?php
define('HOME', 'Location: http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']));
define('LOGIN', 'Location: http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/login');
define('LOGOUT', 'Location: http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/logout');
define('NOTICIAS', 'Location: http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/noticias');
define('ADMIN', 'Location: http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/admin');

class ConfigApp
{
  public static $ACTION = 'action';
  public static $PARAMS = 'params';
  public static $ACTIONS = [
    ''=> 'PublicController#MostrarNovedades',
    'noticias'=>'NoticiasController#MostrarNoticias',

    'borrar'=>'NoticiasController#BorrarNoticia',
    'agregar'=>'NoticiasController#InsertNoticia',
    'modificar'=>'NoticiasController#FormularioEditarNoticia',
    'renovar'=>'NoticiasController#renovarNoticia',
    'mostrar_noticia'=>'NoticiasController#mostrarNoticia',
    'noticiaUser'=>'NoticiasController#mostrarNoticiaUser',

    'buscar'=>'NoticiasController#buscarNoticia',

    'bandas'=>'BandasController#TraerLista',
    'eliminar'=>'BandasController#EliminarBanda',
    'enlistar'=>'BandasController#InsertBanda',
    'editar'=>'BandasController#FormularioEditarBanda',
    'eliminarImagen'=>'BandasController#eliminarImagenBanda',
    'actualizar'=>'BandasController#ActualizarBanda',
    'mostrar_banda'=>'BandasController#mostrarBanda',
    'bandaUser'=>'BandasController#mostrarBandaUser',


    'login'=>'LoginController#login',
    'logout'=>'LoginController#logout',
    'verificarLogin'=>'LoginController#verificarLogin',

    'home'=>'PublicController#MostrarNovedades',
    'bandasV'=>'PublicController#MostrarBandas',
    'mostrarBanda'=>'PublicController#MostrarBanda',
    'verNoticia'=>'PublicController#MostrarNoticia',
    'filtrar'=>'PublicController#filtrarNoticia',

    'registrar'=>'LoginController#registrar',
    'verificarRegistro'=>'LoginController#verificarRegistro',
    'admin'=>'NoticiasController#mostrarNoticiasAdmin',
    'bandasAdm'=>'BandasController#mostrarBandasAdmin',

    'adminPanel'=>'AdminController#mostrarUsuarios',
    'borrarUsuario'=>'AdminController#borrarUsuario',
    'darPermiso'=>'AdminController#insertarAdmin',
    'quitarPermiso'=>'AdminController#quitarAdmin',





  ];
}
?>
