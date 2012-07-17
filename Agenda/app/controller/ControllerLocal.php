<?php

/**
 * Responsável por administrar o local ao qual o serviço é apresentado.
 *
 * @author nelsonmota
 * @create 10/07/2012
 * 
 */
class ControllerLocal extends Controller {
    
    /**
     * Nome do controller e o nome da pasta dentro da pasta view
     * @var $name;
     */
    var $name = 'local';
    
    /**
    * Model que serao usadas
    * @var $models;
    */

    //var $models = array('Local');
    
    public function __construct() {
        parent::__construct();
    }
    
    
        /**
     * Template da administracao de locais de serviços
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 12/07/2012
     * 
     */
    public function index()
    {
        
        $this->assign('name', 'Locais');
        $this->display('local.tpl');
    }
    
    
    /**
     * Template de cadastro de locais de serviços
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 12/07/2012
     * 
     */
    public function novo()
    {
        $this->assign('name', 'Novo Local');
        $this->display('local-novo.tpl');
    }
    
    /**
     * Apresenta o form ao qual o usuário colocará um novo endereço do local
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 13/07/2012
     * 
     */
    
    public function localform()
    {
        $this->display('local-form.tpl');
    }
    
}

?>
