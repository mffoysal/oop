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
    $testt = new first();

    class base{
        private $name = "<br>Farhad Foysal <br>";
        private $std = ["firstName"=>"farhad","name"=>"foysal","name"=>"farid","name"=>"rojina"];

        function __get($key){
            // echo "<br>You are trying to access a non-existing or property ($key) <br>";
            if(array_key_exists($key, $this->std)){
                return $this->std[$key];
            }else{
                return "This key($key) is not defined!";
            }
        }

    }

    $test = new base();

    // echo $test->name;

    // echo $test->farhad;
    // print_r($test->std);

    echo $test->firstName;

    // $test->name();
    


?>