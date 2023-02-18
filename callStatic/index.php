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
        private $name = "farhad foysal";


        private static function UserName($name){
            echo "<br>This is UserName Method: $name. <br>";
        }


        private function hello($name, $namee){
            $this->name = $name;
            echo $this->name;
            // echo $this->hi = $namee;
        }
        function __get($property){
            // echo $this->$property;
        }
        function __set($property,$value){
            $this->$property = $value;

        }

        function __call($method,$arg){
            // echo "existing or private method : $method and value : $arg";
            // $this->$method("Farhd F");
            if(method_exists($this,$method)){
                call_user_func_array([$this,$method], $arg);
            }else{
                echo "Method does not exists : $method <br>";
            }

        }

        public static function __callStatic($method,$args){
            // echo "Private Static Method! $method";
            if(method_exists(__class__,$method)){
                call_user_func_array([__class__,$method],$args);
            }else{
                echo "Method does not exists : $method";
            }
        }

    }

    $test = new base();

    $test->hello("Farad Foysal","moni");

    echo $test->name;

    $test->hi("HI", 100);


    base::UserName("Farhad Moni");

    base::UserName("hi M");
    
?>