ù^*p<?php 
class A 
{ 
    function __construct() 
    { 
        $a = func_get_args(); 
        $i = func_num_args();
        if (method_exists($this,$f='ali'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    } 
    
    function ali1($a1) 
    { 
        echo('__construct with 1 param called: '.$a1."</br>"/*.PHP_EOL*/); 
    } 
    
    function ali2($a1,$a2) 
    { 
        echo('__construct with 2 params called: '.$a1.','.$a2."</br>"/*.PHP_EOL*/); 
    } 
    
    function ali3($a1,$a2,$a3) 
    { 
        echo('__construct with 3 params called: '.$a1.','.$a2.','.$a3."</br>"/*.PHP_EOL*/); 
    } 
} 
$o = new A('sheep'); 
$o = new A('sheep','cat'); 
$o = new A('sheep','cat','dog'); 

// results: 
// __construct with 1 param called: sheep 
// __construct with 2 params called: sheep,cat 
// __construct with 3 params called: sheep,cat,dog 
?>