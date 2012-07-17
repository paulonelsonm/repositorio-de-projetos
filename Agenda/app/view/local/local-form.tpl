
<script type="text/javascript">
{literal}

$(function(){
    $('#cep').mask('99999-999');
});

{/literal}
</script>


<table>
    <tbody>
         <tr class="ui-content-form-entradas" >
            <td> 
                <label> Nome </label> 
                <p> 
                    <input type="text" name="Local[nome]" />
                </p> 
            </td>
        </tr>
        <tr class="ui-content-form-entradas" >
            <td> 
                <label> Endereço </label> 
                <p> 
                    <input type="text" name="Local[endereco]" />
                </p> 
            </td>
        </tr>
        <tr class="ui-content-form-entradas" >
            <td> 
                <label> CEP </label> 
                <p> 
                    <input id="cep" type="text" name="Local[cep]" />
                </p> 
            </td>
        </tr>
        <tr class="ui-content-form-entradas" >
            <td> 
                <label> Link do Mapa </label> 
                <p> 
                    <input type="text" name="Local[link]" />
                </p> 
            </td>
        </tr>
        <tr class="ui-content-form-entradas" >
            <td> 
                <label> Bairro </label> 
                <p> 
                    <input type="text" name="Local[bairro]" />
                </p> 
            </td>
        </tr>
        <tr class="ui-content-form-entradas" >
            <td> 
                <label> Cidade </label> 
                <p> 
                    <input type="text" name="Local[cidade]" />
                </p>
            </td>
        </tr>
        <tr class="ui-content-form-entradas" >
            <td> 
                <label> Tipo de Locaçao </label> 
                <p> 
                    <input type="text" name="Local[tipo_locacao]" />
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