<?php
     
     
     // verifica se a url tem alguma barra
     $e = preg_match('[/]', $_SERVER['REQUEST_URI']);
     
     if($e == 1){
         
          // explode a url na barra
          $url = explode('/', $_SERVER['REQUEST_URI']);
         
          // cria um array para conter os parametros que nao estao em branco
          $urlClean = array();
          
          // percorre os parametros removendo tudo o que for vazio ou estiver em branco
          foreach($url as $k => $v):
               if(!empty ($url[$k]) && $url[$k] != ''){
                    $urlClean[] = $url[$k];
               }
          endforeach;
          
          if(!empty ($urlClean[1])){
              
               // na primeiro caracter do string que contem o nome do controller
               // é passado para maiusculo e os outros passado para maiusculo.
               $controller = strtoupper(substr($urlClean[1], 0,1)).strtolower(substr($urlClean[1], 1,strlen($urlClean[1])));
               
               // compoe o nome do arquivo com o nome do controller
               $pathController = APP . '/controller/Controller' . $controller . '.php' ; 
               
               // verifica se o arquivo de controller existe.
               if(file_exists($pathController))
               {
                    //caso exista, inclui
                    include_once $pathController;  
                    
                    // concatena com o nome da class
                    $class = 'Controller'.$controller;
                    
                    // instancia a class
                    $c = new $class;
                    
                    // verifica se o parametro do método existe
                    if(!empty ($urlClean[2]))
                    {
                         // caso exista, verifica se é existente na classe atual de controller
                         if(method_exists($c, $urlClean[2]))
                         {
                              // olhe o nome do método.
                              $m = $urlClean[2];
                              
                              // cria um array de parametros
                              $p = array();
                              
                              // conta quantos parametros tem..
                              $t = count($urlClean);
                              
                              // conta da terceira barra até o ultimo parametro.
                              
                              // passa os parametros apartir do terceiro
                              for($i=3;$i<$t;$i++){
                                   $p[] = $urlClean[$i];
                              }
                              
                              // passa os parametros para o método da classe atual.
                              call_user_method_array($m,$c,$p);    
                         }else{
                             
                              echo "<p> 404 Page not found </p>";
                              
                         }     
                    }else{
                        
                        echo "<p> 404 Page not found </p>";
                        
                    }
               }else{
                   
                   echo "<p> 404 Page not found </p>";
                   
               }
          }else{
              
              echo "<p> 404 Page not found </p>";
              
          }
     }
?>