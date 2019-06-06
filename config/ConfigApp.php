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
    ''=> 'PublicController#MostrarHome',
    
  

    'home'=>'PublicController#MostrarHome',
    'libres'=>'PublicController#MostrarLibres',
    'ocupados'=>'PublicController#MostrarOcupados',
    'verOcupados'=>'PublicController#verOcupados',
    'verLibres'=>'PublicController#verLibres',

    

    





  ];
}
?>
