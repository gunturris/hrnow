<?php 
namespace App;

use eftec\bladeone\BladeOne;

class PageRender {

    public static function present($path , $datas ){
        //$blade = new Blade(     __DIR__ . '/../templates/',   __DIR__ . '/../cache/views' , null); 
        $blade = new BladeOne( \getcwd() . '/../templates' );  
        return $blade->run($path, $datas) ;
    }

    
}