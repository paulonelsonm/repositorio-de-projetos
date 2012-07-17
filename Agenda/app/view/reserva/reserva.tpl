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
                            <td> <a href="#" class="grid-button" > Nome da reserva </a> </td>
                             <td> <a href="#" class="grid-button" > Serviço </a> </td>
                             <td colspan="2"> <a href="{$server}reserva/novo/" class="grid-button" >  Nova Reserva </a> </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Reserva 1 </td>
                            <td> Aluguel 1  </td>
                            <td><a class="grid-button" href="#"> alterar </a></td>
                            <td><a class="grid-button" href="#"> remover </a></td>
                        </tr>
                        <tr>
                            <td> Reserva 1 </td>
                            <td> Aluguel 1  </td>
                            <td><a class="grid-button" href="#"> alterar </a></td>
                            <td><a class="grid-button" href="#"> remover </a></td>
                        </tr>
                        <tr>
                            <td> Reserva 1 </td>
                            <td> Aluguel 1  </td>
                            <td><a class="grid-button" href="#"> alterar </a></td>
                            <td><a class="grid-button" href="#"> remover </a></td>
                        </tr>
                        <tr>
                            <td> Reserva 1 </td>
                            <td> Aluguel 1  </td>
                            <td><a class="grid-button" href="#"> alterar </a></td>
                            <td><a class="grid-button" href="#"> remover </a></td>
                        </tr>
                        <tr>
                            <td> Reserva 1 </td>
                            <td> Aluguel 1  </td>
                            <td><a class="grid-button" href="#"> alterar </a></td>
                            <td><a class="grid-button" href="#"> remover </a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>