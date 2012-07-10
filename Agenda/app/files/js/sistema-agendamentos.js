/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



function SistemaAgendamentos(){
    
    this.Main = function(){
        $(document).ready(function(){
            
            $('#locacao1 table tbody tr').click(function(){
               location.href = '/Agenda/sistema/agenda/'+$(this).attr('alt');
            });
            
        });
    }
}
new SistemaAgendamentos().Main();