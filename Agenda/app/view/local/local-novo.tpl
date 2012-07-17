<!DOCTYPE>
<html>
    <head>
        <title> Agenda </title>
        <link rel="stylesheet" href="{$css}estilo.css" />
        <link rel="stylesheet" href="{$css}componentes.css" />  
        <script type="text/javascript" src="{$js}jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="{$js}jquery-ui-1.8.21.custom.min.js"></script>
        <script type="text/javascript" src="{$js}jquery.maskedinput-1.3.min.js"></script>
        <script type="text/javascript" src="{$js}script.js"></script>
        <script type="text/javascript" src="{$js}sistema-agendamentos.js"></script>
        <meta charset="utf-8" lang="pt-br" />
    </head>

    <body>
        <div class="ui-pagina">
            {include file='../page/ui-titulo.tpl'}
            {include file='../page/ui-titulo-menu.tpl'}
            <div class="ui-content-conteudo">
                
                <form method="POST" action="{$server}local/index/" >
                    
                    <table width="100%" >
                        <thead>
                            <tr>
                                <td><p>&nbsp;</p></td>
                            </tr>
                        </thead>
                        <tbody>
                             <tr class="ui-content-form-entradas" >
                                
                                 <td width="2%">
                                    <p> 
                                        <label> <input id="usuario" type="radio" name="Local[usuario]" value="usuario" /> Usar endereço do usuário </label>
                                    </p>
                                </td>
                            </tr>
                            <tr class="ui-content-form-entradas" >
                                
                                <td width="2%" >
                                    <p> 
                                        <label> <input id="preencher" type="radio" name="Local[usuario]" value="preencher" /> Preencher endereço do novo local </label>
                                    </p>    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="preenchernovo" ></div>
                    <div id="preenchidousuario" style="display: none;" >
                        <table>
                            <tbody>
                                <tr class="ui-content-form-entradas" >
                                    <td> 
                                        <label> Nome do local </label>
                                        <p>
                                            <input type="text" name="Local[nome]" class="ui-texfield" />
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td><p>&nbsp;</p></td>
                                </tr>
                                <tr class="ui-content-form-entradas">
                                    <td> 
                                        <p> <input type="submit" class="ui-submit"  value="Salvar"  /> </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </form>
            </div>
        </div>
    </body>
</html>