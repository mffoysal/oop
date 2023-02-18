<?php
    // require "first.php";
    // require "second.php";

    function my_autoloader($class) {
        require $class . '.php';
        // echo $class;
    }
    
    spl_autoload_register('my_autoloader');
    
    // Or, using an anonymous function
    spl_autoload_register(function ($class) {
        include $class . '.php';
        // echo $class;
    }); 
    $testt = new first();

    class base{
        private $name = "Farhad Foysal";

        function __get($property){
            // $this->property;
        }

        function __set($property,$value){
            // $this->property = $value;
            // $this->$property = $value;
            // echo "property : $property and $value";

            if(property_exists($this,$property)){
                $this->$property = $value;
            }else {
                echo "$property property is not existing";
            }

        }
    }

    $test = new base();

    $test->name = "MOni";

    $test->course = "php";

    // echo $test->name;




?>