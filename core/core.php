<?php

class Core {
   
    
    
    public function run(){
                
        $url= explode("index.php",$_SERVER['PHP_SELF']); //PHP_SELF retorna todo o conteúdo da URL. O Explode vai retirar o index.php e pegar só o que tiver pra frente dele.
        $url= end($url); //pegando o último registro, ou seja, depois de index.php
        
        
        $params=array();
        if(!empty($url)){ //validando se tem conteúdo na digitação, do contrário assume os defaults no else
            $url=explode('/',$url);
            array_shift($url);
            
            $currentController=$url[0].'Controller';
            array_shift($url);
            
            if(isset($url[0])){
                $currentAction=$url[0];
                array_shift($url);              
            }else{
                $currentAction='index';
            }
            // o processo acima serve para manter apenas a primeira digitação e depois da barra , definir o controller
            // porém o usuário pode digitar mais diretorios e barras, que abaixo serao armazenados como parametros.
            if(count($url) > 0){
                $params = $url;
            }
            
        }else{
            $currentController='homeController';
            $currentAction='index';
        }
        
        
        
        require_once 'core/controller.php';
        
        $c= new $currentController();
        call_user_func_array(array($c,$currentAction),$params); 
        
    }   
    
    
   }

