<?php
define('LOGIN', 'Location: http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/login');
define('LOGOUT', 'Location: http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/logout');

class ConfigApi
{
  public static $RESOURCE = 'resource';
  public static $PARAMS = 'params';
  public static $RESOURCES = [
    'comentarios#GET'=> 'ComentariosApiController#getComentarios',
    'comentarios#DELETE'=> 'ComentariosApiController#DeleteComentario',
    'comentarios#POST'=> 'ComentariosApiController#InsertComentario',



  ];
}
?>
