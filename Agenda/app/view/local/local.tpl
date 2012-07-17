<!DOCTYPE>
<html>
    <head>
        <title> Agenda </title>
        <link rel="stylesheet" href="{$css}estilo.css" />
        <link rel="stylesheet" href="{$css}componentes.css" />  
        <script type="text/javascript" src="{$js}jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="{$js}jquery-ui-1.8.21.custom.min.js"></script>
        <script type="text/javascript" src="{$js}sistema-agendamentos.js"></script>
        <meta charset="utf-8" lang="pt-br" />
    </head>

    <body>
        <div class="ui-pagina">
            {include file='../page/ui-titulo.tpl'}
            {include file='../page/ui-titulo-menu.tpl'}
            <div class="ui-content-conteudo">
                <table class="grid">
                    <thead>
                        <tr>
                             <td align="left"> <a href="#" class="grid-button" > Nome Local </a> </td>
                             <td colspan="2" width="10%"> <a href="{$server}local/novo/" class="grid-button" >  Novo Local </a> </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="left"> Local 1  </td>
                            <td><a class="grid-button" href="#"> alterar </a></td>
                            <td><a class="grid-button" href="#"> remover </a></td>
                        </tr>
                        <tr>
                            <td align="left"> Local 2  </td>
                            <td><a class="grid-button" href="#"> alterar </a></td>
                            <td><a class="grid-button" href="#"> remover </a></td>
                        </tr>
                        <tr>
                            <td align="left"> Local 3  </td>
                            <td><a class="grid-button" href="#"> alterar </a></td>
                            <td><a class="grid-button" href="#"> remover </a></td>
                        </tr>
                        <tr>
                            <td align="left"> Local 4  </td>
                            <td><a class="grid-button" href="#"> alterar </a></td>
                            <td><a class="grid-button" href="#"> remover </a></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </body>
</html>