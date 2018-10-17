<?php
require('libs/Smarty.class.php');
/**
 *
 */
class View
{
  protected $smarty;
  function __construct(){
  $this->smarty = new Smarty();
  $base=$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
  $this->smarty->assign('base',$base);

  }

}


 ?>
