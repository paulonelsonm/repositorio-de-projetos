<!DOCTYPE>
<html>
    <head>
        <title> Agenda </title>
        <link rel="stylesheet" href="{$css}estilo.css" />
        <link   rel="stylesheet"       href="{$css}componentes.css" />
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
                <div class="ui-content-form">
                    
                    <form method="POST" >
                        <table widthd="100%">
                            <thead>
                                <tr>
                                    <td><p>&nbsp;</p></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="ui-content-form-entradas" >
                                    <td> 
                                        <label> Serviço </label> 
                                        <p> 
                                            <select name="Agendamento[servico]"  class="ui-selected">
                                                <option>  Serviço 1 </option>
                                                <option>  Serviço 2 </option>
                                                <option>  Serviço 3 </option>
                                            </select>
                                        </p> 
                                    </td>
                                </tr>
                                <tr class="ui-content-form-entradas" >
                                    <td> 
                                        <label> Usuário </label> 
                                        <p> 
                                            <select name="Agendamento[usuario]"  class="ui-selected">
                                                <option>  Usuario 1 </option>
                                                <option>  Usuario 2 </option>
                                                <option>  Usuario 3 </option>
                                            </select>
                                            <a href="#" class="ui-submit"> Pesquisar </a>
                                        </p>

                                    </td>
                                </tr>
                                <tr class="ui-content-form-entradas" >
                                    <td> 
                                        <label> Fonte de reserva </label> 
                                        <p> 
                                            <select name="Agendamento[usuario]"  class="ui-selected">
                                                <option>  Fonte 1 </option>
                                                <option>  Fonte 2 </option>
                                                <option>  Fonte 3 </option>
                                            </select>
                                        </p>
                                    </td>
                                </tr>
                                <tr class="ui-content-form-entradas" >
                                    <td> 
                                        <label> Data </label> 
                                        <p> 
                                            <input type="text" name="Agendamento[data]" class="ui-texfield"/>
                                        </p>
                                    </td>
                                </tr>

                                <tr class="ui-content-form-entradas" >
                                    <td>
                                        <fieldset>
                                            <legend>
                                                <label> Horários </label> 
                                            </legend>
                                            <p>
                                                <p> <label> <input type="checkbox" value="0" name="Agendamento[horarios]" />  Horario 0 </label> </p>
                                                <p> <label> <input type="checkbox" value="1" name="Agendamento[horarios]" />  Horario 1 </label> </p>
                                                <p> <label> <input type="checkbox" value="2" name="Agendamento[horarios]" />  Horario 2 </label> </p>
                                                <p> <label> <input type="checkbox" value="3" name="Agendamento[horarios]" />  Horario 3 </label> </p>
                                            </p>
                                        </fieldset>
                                    </td>
                                </tr>
                                <tr>
                                    <td><p>&nbsp;</p></td>
                                </tr>
                                <tr class="ui-content-form-entradas">
                                    <td> 
                                        <p> <input type="submit" class="ui-submit" value="Agendar"  /> </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>