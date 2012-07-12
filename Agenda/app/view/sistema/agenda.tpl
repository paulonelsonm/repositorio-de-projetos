<!DOCTYPE>
<html>
    <head>
        <title> Agenda </title>
        <link   rel="stylesheet"       href="{$css}jquery-ui-1.8.21.custom.css" />
        <link   rel="stylesheet"       href="{$css}estilo.css" />
        <link   rel="stylesheet"       href="{$css}componentes.css" />
        <link   rel="stylesheet"       href="{$css}app-agenda-estilo.css" />
        
        <script type="text/javascript" src="{$js}jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="{$js}jquery-ui-1.8.21.custom.min.js"></script>
        <script type="text/javascript" src="{$js}app-agenda.js"></script>
        <meta charset="utf-8" lang="pt-br" />
    </head>
    <body>
        <div class="ui-pagina">
            {include file='../page/ui-titulo.tpl'}
            {include file='../page/ui-titulo-menu.tpl'}
            <div id="principal" class="ui-content-conteudo">
                <div id="calendario">
                    <div id="meses">
                        <div id="calendar"></div>
                        <p></p>
                    </div>
                    <div id="dias">
                        <table id="usuariosAgendados" class="grid" >
                            <thead>
                                <tr> <td colspan="4"> <p> Agendados do dia </p> </td> </tr>
                                <tr>
                                    <td> Horário </td>
                                    <td width="200px;"> Serviço </td>
                                    <td width="300px;">  Nome </td>
                                    <td width="200px;"> Reserva </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 10:00 </td>
                                    <td> Aluguel Studio </td>
                                    <td> Nome do Usuario 1 </td>
                                    <td > Sala 10 </td>
                                </tr>
                                <tr>
                                    <td> 11:00 </td>
                                    <td> Aluguel Studio </td>
                                    <td> Nome do Usuario 2 </td>
                                    <td > Sala 10 </td>
                                </tr>
                                <tr>
                                    <td> 12:00 </td>
                                    <td> Aluguel Studio </td>
                                    <td> Nome do Usuario 3 </td>
                                    <td > Sala 10 </td>
                                </tr>
                                <tr>
                                    <td> 13:00 </td>
                                    <td> Aluguel Studio </td>
                                    <td> Nome do Usuario 4 </td>
                                    <td > Sala 10 </td>
                                </tr>
                                <tr>
                                    <td> 12:00 </td>
                                    <td> Aluguel Studio </td>
                                    <td> Nome do Usuario 3 </td>
                                    <td > Sala 10 </td>
                                </tr>
                                <tr>
                                    <td> 13:00 </td>
                                    <td> Aluguel Studio </td>
                                    <td> Nome do Usuario 4 </td>
                                    <td > Sala 10 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>