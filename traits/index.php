<?php
        trait derived_trait{

            public function trait_test($name){
                echo $name;
            }
    
        }


    class base_main{
        public static $name = "Farhad Foysal";
        // use trait with trait class name
        use derived_trait;
        public function __construct($name){
            $this->trait_test($name);
            self::$name = $name;
        }
    }
    
    // interface cannot implement any base
    interface derived_one{


    }
    interface derived_three{

    }

    class derived_two implements derived_one, derived_three{


    }


    $test = new base_main("Moni");

    $test->trait_test("moni");
?>