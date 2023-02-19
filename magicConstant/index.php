<?php
    namespace my\name_s\one;
    class base{

        public $name = "Farhad Foysal";

        public function ShowName(){
            // echo "Method : "
            return "Class Name : ".__CLASS__ ."<br> Method Name : ".__METHOD__."<br> Get Namespace : ".__NAMESPACE__."<br>";
        }

    }

    class derived extends base
    {
        
    }
        
    $test = new derived();

    echo $test->ShowName();




    // __LINE__
    echo "Line Number: ". __LINE__ . "<br>";
    
        // __FILE__
        echo "fILE PATH: ". __FILE__ . "<br>";

        // __DIR__
        echo "Path Dir : ". __DIR__ . "<br>";

        // _FUNCTION__

    function MyFunction(){
        echo "Function Name is : ". __FUNCTION__. "<br>";
    }

    MyFunction();


    trait MyTrait{
        public function getTrait(){
            return "Trait : ". __TRAIT__;
        }
    }

    class trait_t{
        use MyTrait;
    }

    $test = new trait_t();

    echo $test->getTrait();
?>