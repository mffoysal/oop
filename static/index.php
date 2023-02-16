<?php
    class base{
        // all properties-data-member and method have static for inheritance
        public static $name = "Farhad Foysal";
        // public static function show($name){
        //     echo self::$name = $name;
        // }

        // public function __construct($name){
        //     self::show($name);
        // }

        public function __construct($name){
            derived::show($name);
        }
    }

    // echo base::$name;
    // base::show();

    class derived extends base{
        public function show($name){
            echo parent::$name = $name;
        }
    }

    $test = new derived("Moni");

    // $test->show();


    
?>