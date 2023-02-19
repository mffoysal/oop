<?php
    // namespace my\name_s\one;
    namespace my;
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
            return "Trait : ". __TRAIT__."<br>";
        }
    }

    class trait_t{
        use MyTrait;
    }

    $test = new trait_t();

    echo $test->getTrait();


    class farhad{
        public function MyMethod(){
            echo "My Method <br>";
        }
    }

    // class exists
    if(class_exists('my\farhad')){
        echo "Class is exists.<br>";
        $obj = new farhad();
    }else {
        echo "Class is not exists.<br>";
    }

    interface MyInter{

    }

    // check interface
    if(interface_exists('my\MyInter')){
        echo "Interface is exists.<br>";
        class MyClass implements MyInter{

        }
    }else {
        echo "Interface is not exists.<br>";
    }

    // method exists
    $test = new farhad();

    if(method_exists($test,'MyMethod')){
        echo "Method is exists.<br>";
            $test->MyMethod();
    }else {
        echo "Method is not exists.<br>";
    }

    // trait exists

    if(trait_exists('my\MyTrait')){
        echo "Trait is exists.<br>";
            class useClass{
                use MyTrait;
            }
            $new = new useClass();
            $new->getTrait();
    }else {
        echo "Trait is not exists.<br>";
    }

    class proClass{
        public $pro;
    }

    class pro_derived extends proClass{

    }

    $pro = new proClass();
    // property exists
    if(property_exists('my\proClass','pro')){
        echo "Property is exists.<br>";

    }else {
        echo "Property is not exists.<br>";
    }

    // object exists
    if(is_a($pro,'my\proClass')){
        echo "Object is exists.<br>";

    }else {
        echo "Object is not exists.<br>";
    }

    $proC = new pro_derived();

        // subclass exists
        if(is_subclass_of($proC,'my\proClass')){
            echo "Subclass is exists.it's subclass of parentClass<br>";
    
        }else {
            echo "Subclass is not exists.<br>";
        }


?>