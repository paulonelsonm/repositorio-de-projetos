<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelUsuario
 *
 * @author pmota
 */
class ModelUsuario extends Connection {
    
    var $data = array();
    
    public function __construct(){}
    
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
    public function __get($name) {
        if(array_key_exists($name, $this->data))
        {
            return $this->data[$name];
        }else{
            return null;
        }
    }
    
    public function cadastro(){
        $this->prepare_procedure('sp_usuario_cadastro');
        $row = $this->execute_procedure();
        $this->data = array();
        return $row;
    }
    
    
    public function validarLogin(){
        $this->prepare_procedure('sp_usuario_login');
        $row = $this->execute_procedure();
        $this->data = array();
        return $row;
    }
    
}    

?>
