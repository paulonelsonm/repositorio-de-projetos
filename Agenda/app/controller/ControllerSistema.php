<?php

/**
 * Responsável por controlar todos o fluxo do sistema administrativo.
 *
 * @author nelsonmota
 * @create 10/07/2012
 * 
 */
class ControllerSistema  extends Controller{
    
    
    /**
     * Nome do controller e o nome da pasta dentro da pasta view
     * @var $name;
     */
    
     var $name = 'sistema';
     
     /**
     * Model que serao usadas
     * @var $models;
     */
     
     var $models = array('Servico');
     
    /**
     * Método construtor da classe
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 10/07/2012
     * @return void;
     */
    function __construct(){
        parent::__construct();
        //$this->assign('name', '<|Nome do local|>');
    }
    
    /**
     * Método responsável por mostrar a tpl do local que será feito o serviço.
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 10/07/2012
     * @return void;
     */
    
    public function index()
    {
        $this->display('index.tpl');
    }
    
    /**
     * Mostra o template principal do do gerenciamento
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 10/07/2012
     * @return void;
     */
    
    public function agenda()
    {
        $this->assign('name', '<|Nome do local|>');
        $this->display('agenda.tpl');
    }
    
    /**
     * Faz um novo agendamento
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 10/07/2012
     * @return void;
     */
    
    public function novo(){
        $this->assign('name', 'Novo Agendamento');
        $this->display('agenda-novo.tpl');
    }
    
}

?>
