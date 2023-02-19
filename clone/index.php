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
        private $con;
        public function __construct(){
            // $this->con = mysqli_connect();
        }

        public function Name($name,$course){
           echo $this->name = $name;
           echo $this->course = $course;
        }

        public function __isset($property){
            // echo isset($this->$property);
            echo isset($this->details[$property]);

        }
        public function __toString(){
            return "You can't print any obj as a string of class : ".get_class($this)."<br>";
        }


        public function __sleep(){
            // mysqli_close($con);
            return array("name");
        }

        public function __wakeup(){
            // $this->con = mysqli_connect();
            echo "This is wakeup method. <br>";
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


// wakeup code (if we do unserialize obj array)


    $test_sleep = unserialize($test_sleep);

    echo $test_sleep;


    $a = 5;
    $b = $a;

    echo $b." <br>". $a."<br>";

    $b = 10;

    echo $b." <br>". $a."<br>"; // copy by value

    $aa = 15;
    $bb = & $aa;

    echo $bb." <br>". $aa."<br>";

    $bb = 10;

    echo $bb." <br>". $aa."<br>"; // copy by refference

    class clone_c{
        public $name;
        public $phone = "01690175881";

        public function __construct($n){
            $this->name = $n;
        }
        public function setcphone(course $n){
            $this->phone = $n;
        }

        public function __clone(){
            $this->phone = clone $this->phone;
        }
            
            // $this->phone = clone $this->phone;
        

    }

    class course{
        public $cphone;

        public function __construct($n){
            $this->cphone = $n;
        }
    }


    $clone = new clone_c("Farhad Foysal clone");

    $course = new course("01816444372");
 
    // $clone2 = clone $clone; // clone keyword for copy by value   
    // $clone2->name = "Monira Khanom";
    // echo $clone->name.". clone 2 :".$clone2->name."<br>"; // copy by refference and after clone value will be cpy by value

    
    $clone->setcphone($course);

    $clonee = clone $clone;

    $clonee->name = "Najifa";
    $clonee->phone->cphone = "01770627875";
    


print_r($clone);
print_r($clonee);

    // echo $clonee->cphone.". clone 2 :".$clonee->name."<br>"; // copy by refference and after clone value will be cpy by value


?>