/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



function SistemaAgendamentos(){
    
    this.Main = function(){
        $(document).ready(function(){
            
            $('#preencher').change(function(){
                $('#preenchidousuario').hide();
                
                $('#preenchernovo').load(path+'sistema/localform/', {limit : 50}, function(){});
                $('#preenchernovo').fadeIn(1000);
            });
            
            $('#usuario').change(function(){
                $('#preenchernovo').hide();
                $('#preenchidousuario').fadeIn(1000);
            });
            
        });
    }
}
new SistemaAgendamentos().Main();