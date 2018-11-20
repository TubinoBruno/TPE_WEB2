<?php

class ConfigApi
{
  public static $RESOURCE = 'resource';
  public static $PARAMS = 'params';
  public static $RESOURCES = [
    'comentarios#GET'=> 'NoticiasApiController#GetNoticias',
    'comentarios#DELETE'=> 'NoticiasApiController#DeleteNoticia',
    'comentarios#POST'=> 'NoticiasApiController#InsertNoticia',



  ];
}
?>
