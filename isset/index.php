<?php
    // require "first.php";
    // require "second.php";

    function my_autoloader($class) {
        require $class . '.php';
        echo $class;
    }
    
    spl_autoload_register('my_autoloader');
    
    // Or, using an anonymous function
    spl_autoload_register(function ($class) {
        include $class . '.php';
        echo $class;
    }); 
    $test = new first();

    
?>