<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerSistema
 *
 * @author nelsonmota
 */
class ControllerSistema  extends Controller{
    
     var $name = 'sistema';
     //var $models = array('Sistema');
    
    function __construct(){
        parent::__construct();
        $this->assign('name', 'nome do empreendimento alalalala');
    }
    
    public function index()
    {
        
        $this->assign('name', 'nome do empreendimento alalalala');
        $this->display('index.tpl');
    }
    
    public function agenda()
    {
        $this->display('agenda.tpl');
    }
    
    public function novo(){
        $this->display('agenda-novo.tpl');
    }
    
    
    public function calendario(){
        
        $ano = date('Y');
        
        $dates = array();
        
        $dates[] = array(
            
            '13:00' => array(
                0 => array(
                    'servico' => 'Aluguel',
                    'usuario' => 'Nelson Mota 1',
                    'reserva'  => 'Sala 1'
                ),
                1 => array(
                    'servico' => 'Aluguel',
                    'usuario' => 'Nelson Mota 2',
                    'reserva'  => 'Sala 2'
                ),
                2 => array(
                    'servico' => 'Aluguel',
                    'usuario' => 'Nelson Mota 3',
                    'reserva'  => 'Sala 1'
                ),
                3 => array(
                    'servico' => 'Aluguel',
                    'usuario' => 'Nelson Mota 4',
                    'reserva'  => 'Sala 1'
                ),
                4 => array(
                    'servico' => 'Aluguel',
                    'usuario' => 'Nelson Mota 5',
                    'reserva'  => 'Sala 2'
                )
            ),
            '15:00' => array(
                
                0 => array(
                    'servico' => 'Aluguel',
                    'usuario' => 'Nelson Mota 1',
                    'reserva'  => 'Sala 1'
                ),
                1 => array(
                    'servico' => 'Aluguel',
                    'usuario' => 'Nelson Mota 2',
                    'reserva'  => 'Sala 2'
                ),
                2 => array(
                    'servico' => 'Aluguel',
                    'usuario' => 'Nelson Mota 3',
                    'reserva'  => 'Sala 1'
                ),
                3 => array(
                    'servico' => 'Aluguel',
                    'usuario' => 'Nelson Mota 4',
                    'reserva'  => 'Sala 1'
                ),
                4 => array(
                    'servico' => 'Aluguel',
                    'usuario' => 'Nelson Mota 5',
                    'reserva'  => 'Sala 2'
                )
            ),
            '17:00' => array(
                
                0 => array(
                    'servico' => 'Aluguel',
                    'usuario' => 'Nelson Mota 1',
                    'reserva'  => 'Sala 1'
                ),
                1 => array(
                    'servico' => 'Aluguel',
                    'usuario' => 'Nelson Mota 2',
                    'reserva'  => 'Sala 2'
                ),
                2 => array(
                    'servico' => 'Aluguel',
                    'usuario' => 'Nelson Mota 3',
                    'reserva'  => 'Sala 1'
                ),
                3 => array(
                    'servico' => 'Aluguel',
                    'usuario' => 'Nelson Mota 4',
                    'reserva'  => 'Sala 1'
                ),
                4 => array(
                    'servico' => 'Aluguel',
                    'usuario' => 'Nelson Mota 5',
                    'reserva'  => 'Sala 2'
                )
            )
        ); 
        
        $this->writejson($dates);
        
    }
    
    
}

?>
