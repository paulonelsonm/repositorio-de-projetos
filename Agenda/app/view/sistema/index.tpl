<!DOCTYPE>
<html>
    <head>
        <title> Agenda </title>
        <link rel="stylesheet" href="{$css}estilo.css" />
        <link   rel="stylesheet"       href="{$css}app-agenda-estilo.css" />
        <script type="text/javascript" src="{$js}jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="{$js}jquery-ui-1.8.21.custom.min.js"></script>
        <meta charset="utf-8" lang="pt-br" />
    </head>
    <body>
        <div class="ui-pagina">
            {include file='../page/ui-titulo.tpl'}
            <div class="ui-content-conteudo">
                
                    <table cellpadding="5" class="grid">
                        <thead>
                            <tr>
                                <td colspan="3"> <p> Locais da fonte de serviço </p> </td>
                            </tr>
                            <tr>
                                <td> Local do serviço </td>
                                <td> Agendamentos Mensais </td>
                                <td> Agendamentos de Hoje </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr alt="1" onclick="location.href='{$server}sistema/agenda/1'" >
                                <td>  Local 1 </td>
                                <td>  23 Agendamentos </td>
                                <td>  Agendados' </td>
                            </tr>
                            <tr alt="2" onclick="location.href='{$server}sistema/agenda/2'" >
                                <td>  Local 2  </td>
                                <td>  10 Agendamentos  </td>
                                <td>  6 Agendados  </td>
                            </tr>
                        </tbody>
                    </table>
                
            </div>
            <div class="ui-content-rodape"></div>
        </div>
    </body>
</html>