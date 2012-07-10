<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerUsuario
 *
 * @author pmota
 */
class ControllerUsuario extends Controller {
     
     var $name = 'site';
     var $models = array();
     
     public function __construct() {
          parent::__construct();     
     }
     
     public function login()
     {
         $this->display('login.tpl');
     }
     
}

?>
