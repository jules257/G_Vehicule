<?php

class Renderer{

  public static  function render( string $path,array $variables=[]){
    
        extract($variables);
        ob_start();
        require('templetes/'.$path.'.html.php');
        $pageContent = ob_get_clean();
        
        require('templetes/layout.html.php');
    }
}