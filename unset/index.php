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
    $test = new first();

    class base{
        public $name = "farhad Fosyal";
        private $course;
        private $details = ["name"=> "test name", "age"=> "20"]; 

        public function Name($name,$course){
           echo $this->name = $name;
           echo $this->course = $course;
        }

        public function __isset($property){
            // echo isset($this->$property);
            echo isset($this->details[$property]);

        }


        public function __unset($property){
            unset($this->$property);
        }
    }

    $test = new base();
    $test->Name("Farhad","Foysal");

    // echo isset($test->name);

    // echo isset($test->course);

    // echo isset($test->age);

    // echo empty($test->age);

    // unset code

    unset($test->course); // unset private property


    // echo $test->course; // undefined property

    print_r($test);



?>