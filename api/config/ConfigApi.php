<?php

class ConfigApi
{
  public static $RESOURCE = 'resource';
  public static $PARAMS = 'params';
  public static $RESOURCES = [
    'noticias#GET'=> 'NoticiasApiController#GetNoticias',
    'noticias#DELETE'=> 'NoticiasApiController#DeleteNoticia',
    'noticias#POST'=> 'NoticiasApiController#InsertNoticia',
    'noticias#PUT'=> 'NoticiasApiController#UpdateNoticia',

    'bandas#GET'=> 'BandasApiController#GetBandas',
    'bandas#DELETE'=> 'BandasApiController#DeleteBanda',
    'bandas#POST'=> 'BandasApiController#InsertBanda',
    'bandas#PUT'=> 'BandasApiController#UpdateBanda',


  ];
}
?>
