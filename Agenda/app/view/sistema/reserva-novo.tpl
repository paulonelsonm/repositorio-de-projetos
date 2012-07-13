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
                <form method="POST"  action="{$server}sistema/reserva/" >
                    <table width="100%" >
                        <thead>
                            <tr>
                                <td class="ui-content-form-titulo" > Novo centro de reserva </td>
                            </tr>
                            <tr>
                                <td><p>&nbsp;</p></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="ui-content-form-entradas" >
                                <td> 
                                    <label> Serviço </label> 
                                    <p> 
                                        <select name="CentroReserva[servico]"  class="ui-selected">
                                            <option>  Serviço 1 </option>
                                            <option>  Serviço 2 </option>
                                            <option>  Serviço 3 </option>
                                        </select>
                                    </p> 
                                </td>
                            </tr>
                            <tr class="ui-content-form-entradas" >
                                <td> 
                                    <label> Nome </label> 
                                    <p> 
                                        <input type="text" name="CentroReserva[nome]" class="ui-texfield" />
                                    </p>
                                </td>
                            </tr>
                            <tr class="ui-content-form-entradas" >
                                <td> 
                                    <label> Detalhes </label> 
                                    <p style="width: 500px;" > 
                                        <textarea style="width: 500px; height: 100px;" name="CentroReserva[detalhes]" rows="50" class="ui-texfield" ></textarea>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td><p>&nbsp;</p></td>
                            </tr>
                            <tr class="ui-content-form-entradas">
                                <td> 
                                    <p> <input type="submit" class="ui-submit" value="Salvar"  /> </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>