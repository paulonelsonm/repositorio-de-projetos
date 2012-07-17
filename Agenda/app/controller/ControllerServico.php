<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerServico
 *
 * @author nelsonmota
 */
class ControllerServico extends Controller {
    
    var $name = 'servico';
    
    var $models = array('Servico');
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->assign('name', 'Serviços');
        $this->display('servico.tpl');
    }
    
    
    /**
     * Template do cadastro de serviços
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 12/07/2012
     * 
     */
    
    public function novo(){
        
        
        $this->assign('name', 'Novo serviço');
        
        $result = $this->Servico->servicoTipoListar();
        
        $this->assign('tipo_servico', $result);
        
        $this->display('servico-novo.tpl');
    }
    
    /**
     * Template do cadastro de serviços
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 16/07/2012
     * 
     */
    public function salvar(){
        
        
        $filter = array(
            'tipo' => FILTER_VALIDATE_INT,
            'nome' => FILTER_SANITIZE_ENCODED
        );
        
        $post = filter_var_array($_POST['Servico'] , $filter);
        
    }
    
}

?>
