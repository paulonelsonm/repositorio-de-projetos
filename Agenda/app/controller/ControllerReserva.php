<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe responsável por administrar o centro de reserva.
 *
 * @author nelsonmota
 */
class ControllerReserva extends Controller {
    /**
     * Nome do controller e o nome da pasta dentro da pasta view
     * @var $name;
     */
    
    
     var $name = 'reserva';
     
     /**
     * Model que serao usadas
     * @var $models;
     */
     
     //var $models = array('Servico');
     
     
     
     public function __construct() {
         parent::__construct();
     }
     
     /**
     * Template que mostra quais as reservas tem cadastradas.
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 12/07/2012
     * 
     */
    public function index(){
        $this->assign('name', 'Centro de Reservas');
        $this->display('reserva.tpl');
    }
    
    
    /**
     * Template de cadastro de um centro de reserva
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 12/07/2012
     * 
     */
    public function novo(){
        $this->assign('name', 'Novo Centro de Reserva');
        $this->display('reserva-novo.tpl');
    }
}

?>
