<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 
 *
 * @author nelsonmota
 * @Data de Criaçao : 16/07/2012
 */
class ModelServico extends Connection {
    
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
    
    
    /**
     * Método para executar procedures
     * @author Nelson Mota
     * @param $sp String : Nome da store procedure
     * @return $row : resultado da procedure.
     */
    public function servicoTipoListar()
    {
        $this->prepare_procedure('store_servicoTipo');
        $row = $this->execute_procedure();
        $this->data = array();
        return $row;
    }
    
    /**
     * Método usado para salvar o serviço
     * @author Nelson Mota
     * @Data de Criaçao : 16/07/2012
     * @return $row : resultado da procedure.
     */
    public function servicoSalvar()
    {
        $this->prepare_procedure('store_servicoSalvar');
        $row = $this->execute_procedure();
        $this->data = array();
        return $row;
    }
}

?>
