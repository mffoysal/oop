<?php
    class base{


    }

    class derived extends base{

 
    }
    
    function a(int $val){
        echo $val + 10;
        echo "<br>";
    }

    a(10);
    // a("hi");

    function fruits(array $names){
        foreach($names as $value){
            echo $value."<br>";
        }
    }

    $test = ["Apple","Orange","WaterMelon"];
    fruits($test);

    class a{
        public function cala($name){
            echo "hi class a <br>";
        }
    }

    class b{
        public function calb($name){
            echo "hello class b <br>";
        }
    }

    function hi(b $test){
        $test->calb("hi");
    }

    $test = new b();

    hi($test);

    class school{
        public function get_name(student $name){
            foreach ($name->show_name() as $value) {
                echo $value . "<br>";
            }
        }
    }
    class student{
        public function show_name(){
            return ["Farhad","Foysal","Moni"];
        }
    }

    class library{

    }

    $test1 = new school();
    $test2 = new student();
    $lib = new library();
    $test1->get_name($test2);
    

?>