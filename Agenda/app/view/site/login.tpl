<html>
    <head>
        <title> Agenda eletronica </title>
        <link rel="stylesheet" href="{$css}estilo.css" />
        <link rel="stylesheet" href="{$css}componentes.css" />
        <meta charset="utf-8" lang="pt-br" />
    </head>
    <body>
        
        <div class="ui-pagina">
            <div class="ui-login" >
                <p> Login de usuário. </p>
                
                <form action="{$server}home/index/" method="POST"> 
                <table>
                    <tr>
                        <td> <label> Login </label> </td>
                    </tr>
                    <tr>
                        <td> <input type="text" name="Usuario[Login]" placeholder="Números e Letras" class="ui-texfield"/> </td>
                    </tr>
                    <tr>
                        <td> <label> Senha </label> </td>
                    </tr>
                    <tr>
                        <td> <input type="password" name="Usuario[Senha]" class="ui-texfield" /> </td>
                    </tr>
                    <tr>
                        <td> <input type="submit" value="Entrar" class="ui-submit" /> </td>
                    </tr>
                        
                </table>
                </form>    
            </div>
        </div>
    </body>
</html>