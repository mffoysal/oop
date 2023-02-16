<?php
        trait derived_trait{

            public function trait_test($name){
                echo $name;
            }
    
        }
        trait bye{
            public function traitt($name){
                echo $name."main trait";
            } 
            public function traittwo($name){
                echo $name."Hi";
            }
        }

    class base_main{
        public static $name = "Farhad Foysal";
        // use trait with trait class name
        use derived_trait, bye;
        public function __construct($name){
            $this->trait_test($name);
            self::$name = $name;
        }
    }
    
    // interface cannot implement any base and any content body
    interface derived_one{

        public function trait_test($name);

    }
    interface derived_three{

    }

    class derived_two implements derived_one, derived_three{

        use derived_trait, bye;
        public function __construct($name){
            $this->trait_test($name);
            $this->traitt($name);
            $this->traittwo($name);
        }
        // trait over riding
        public function trait_test($name){
            echo $name."trait Over riding";
        }

    }


    $test = new base_main("Moni");

    $test->trait_test("moni");

    $testt = new derived_two("Farhad-obj");


    //trait overriding 
    $testt->trait_test("foysal");

    trait overR{
        public function aa(){
            echo "trait function";
        }
        private function a(){
            echo "private trait function";
        }
    }
    trait overRi{
        public function aa(){
            echo "trait 2 function";
        }
    }

    class A{
        public function aa(){
            echo "base funciton";
        }
    }

    class B extends A{
        use overR{
            overR::a as public newa;
        }
        use overRi{
            overR::aa insteadof overRi;
            overRi::aa as newAA;
        }

        // public function aa(){
        //     echo "Object class function";
        // }

    }

    $trait = new B();
    echo "<br>";
    $trait->aa(); // priority for trait 1. Obj class's function 2. trait function 3. base function
    echo "<br>";
    $trait->newAA();
    echo "<br>";
    $trait->newa();

?>