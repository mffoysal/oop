<?php
    trait traitOne{

    }
    trait traitTwo{

    }
    class base
    {
        public $id;
        public $name = "Farhad Foysal";
        public $phone = 5056;

        private $depPrivate;

        use traitOne, traitTwo;

        public function __construct(){

            $this->id = "221005312";
            $this->name = "MOni";
            $this->phone = "01585855075";
            $this->depPrivate = "CSE";

            $class = get_class_methods('derived');

            print_r($class);
            
            echo "<br>";
        
            foreach ($class as $key => $method) {
                echo "Method : $key is ".$method."<br>";
            }

            echo "<br>Property : ";
            $variable = get_class_vars(__CLASS__);

            print_r($variable);
            
            echo "<br>";
        
            // foreach ($variable as $key => $v) {
            //     echo "Property : $key is ".$v."<br>";
            // }

            echo "<br>Get Object Variable <br>";
            $variable = get_object_vars($this);
        
            print_r($variable);
            
            echo "<br>";
        }
        public function MyFunc1(){
            
        }
        public function MyFunc2(){
            
        }
        private function MyFuncPrivate(){
            
        }
        public function showName(){
            echo "Class Name : ".get_class($this)."<br>";
        }


        static public function test(){
            var_dump(get_called_class());
        }

    }

    class derived extends base{
        public function getClass(){
            echo "Pareant Class Name : ".get_parent_class($this)."<br>";
        }
    }

    $test = new derived();
    
    $test->showName();
    echo "Class Name : ".get_class($test)."<br>";
    $test->getClass();
    echo "Parent Class Name : ".get_parent_class($test)."<br>";

    $class = get_class_methods('derived');

    print_r($class);
    
    echo "<br>";

    foreach ($class as $key => $method) {
        echo "Method : $key is ".$method."<br>";
    }
    

    // get class variables
    
    $variable = get_class_vars(get_class($test));

    print_r($variable);
    
    echo "<br>";

    foreach ($variable as $key => $v) {
        echo "Property : $key is ".$v."<br>";
    }


    // get object variable
    echo "<br>Get Object Variable <br>";
    $variable = get_object_vars($test);

    print_r($variable);
    
    echo "<br>";

    foreach ($variable as $key => $v) {
        echo "Property : $key is ".$v."<br>";
    }

        // get called Class
        echo "<br>Get Called Class <br>";

        base::test();
        derived::test();

        $variable = get_object_vars($test);

        // get declared Class
        echo "<br>Get declared Class <br>";
        print_r(get_declared_classes());

        // get declared inter face

        interface TestIn{

        }

        echo "<br>Get declared Interfaces <br>";
        print_r(get_declared_interfaces());

        // get declared trait

        echo "<br>Get declared trait <br>";
        print_r(get_declared_traits());

        //class alias

        echo "<br>Class alias <br>";

        class baseTwo{
            public $test;
        }

        class_alias('baseTwo','far');

        $a = new baseTwo();
        $b = new far();

        echo $a->test = "baseTwo <br>";
        echo $b->test = "far <br>";

?>