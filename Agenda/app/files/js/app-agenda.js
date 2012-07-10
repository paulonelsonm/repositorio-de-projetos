/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var path = '/Scrum';


function Agenda(){
    
    this.Main = function(){
        
        //new Agenda().request();
        
        $(document).ready(function(){
            
                var meses = new Array();
                
                meses[0] = 'Janeiro';
                meses[1] = 'Fevereiro';
                meses[2] = 'Março';
                meses[3] = 'Abril';
                meses[4] = 'Maio';
                meses[5] = 'Junho';
                meses[6] = 'Julho';
                meses[7] = 'Agosto';
                meses[8] = 'Setembro';
                meses[9] = 'Outubro';
                meses[10] = 'Novembro';
                meses[11] = 'Dezembro';
            
                $('#calendar').datepicker({changeMonth: true});

                var dia = $('#calendar table tbody .ui-state-active').html();
                var mes = meses[$('.ui-datepicker-month').val()];
                var ano = $('.ui-datepicker-year').html();

                $('#usuariosAgendados thead tr td p').html(
                    'Agendados do dia ' +
                    '<label style="margin:0 10px 0 10px;" >'+dia+'</label>'+
                    '<label style="margin:0 10px 0 10px;" >'+mes+'</label>'+
                    ' de <label style="margin:0 10px 0 10px;" >'+ano+'</label>'
                );
            
            
            $('#calendar').click(function(){
                
                if($('#calendar table tbody .ui-state-active').html() != null)
                {
                        $('#usuariosAgendados').fadeOut(50,function(){
                            $('#usuariosAgendados').hide();
                        });
                        
                        
                        var dia = $('#calendar table tbody .ui-state-active').html();
                        var mes = meses[$('.ui-datepicker-month').val()];
                        var ano = $('.ui-datepicker-year').html();
                        
                        $('#usuariosAgendados thead tr td p').html(
                            'Agendados do dia ' +
                            '<label style="margin:0 10px 0 10px;" >'+dia+'</label>'+
                            '<label style="margin:0 10px 0 10px;" >'+mes+'</label>'+
                            ' de <label style="margin:0 10px 0 10px;" >'+ano+'</label>'
                        );
                        
                            
                        $('#usuariosAgendados').fadeIn(100,function(){
                            $('#usuariosAgendados').show();
                        });
                        
                }
            });
            
            $('#prev a').click(function(){
                return false;
            });
            
            
            $('#next a').click(function(){
                return false;
            });
            
            /*
            $('#calendar').click(function(){
                strData = ''+$('#calendar table tbody .ui-state-active').html()+'/'+$('.ui-datepicker-month').val()+'/'+$('.ui-datepicker-year').html();
                $('#meses p').html(strData);
            });
            */
            
            $('.ui-datepicker-month').change(function(){
                //$('#calendar table tbody .ui-state-active').html();
            });
        });
    }
    
    this.request = function(){
        
        $.ajax({
            url : 'http://localhost/Studio/sistema/calendario/',
            type : 'json',
            beforeSend : function(){
                $('#loading').show();
            },
            complete : function(){
                
                $('#loading').remove();
                $('#principal').fadeIn(1000,function(){
                    //$('#principal').html('<div id="calendario"><div id="meses"></div><div id="dias">Dias</div></div>');
                });
                
            },
            success : function(obj){}
        });
    }
}

new Agenda().Main();