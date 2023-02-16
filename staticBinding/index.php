<?php
    class base{
        // all properties-data-member and method have static for inheritance
        protected static $name = "Farhad Foysal";
        public static function show($name){
            echo static::$name;
            echo self::$name;
            echo derived::$name;
        }

        // public function __construct($name){
        //     self::show($name);
        // }

        public function __construct($name){
            self::show($name);
            derived::show($name);
        }

    }

    // echo base::$name;
    // base::show();

    class derived extends base{
        protected static $name = "Foysal Farhad";

        public static function show($name){
            echo self::$name;
            echo parent::$name;
            echo static::$name;
        }


    }

    $test = new derived("Moni");

    // $test->show();


    
?>