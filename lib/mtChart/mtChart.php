<?php
namespace mtChart ;

class mtChart {

    static  $loaded = false ;
    static  $modules = array();

    static function getMtChart($XSize = 700, $YSize = 230){
        if(self::$loaded !== true){
            include_once __DIR__.'/src/mtChart.php';
            self::$loaded = true ;
        }
        return new mtChart($XSize, $YSize);
    }
}

?>