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
        public $name = "Farhad Foysal";
        public $phone = "01585855075";
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
        public function __toString(){
            return "You can't print any obj as a string of class : ".get_class($this);
        }


        public function __sleep(){
            return array("name");
        }
    }

    $test = new base();
    // $test->Name("Farhad","Foysal");

    // echo isset($test->name);

    // echo isset($test->course);

    // echo isset($test->age);

    // echo empty($test->age);

// to string code 

    // echo $test;

    // sleep code

    $test_sleep = serialize($test); // object to convert array

    echo $test_sleep;
    // echo "<pre>";
    // print_r($test_sleep);

    // if we serialize partucalr member property of object then we have to call sleep function





?>