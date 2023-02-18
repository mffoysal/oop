<?php
    class base{
        private $con;
        function __construct(){
            echo "base function method construct. <br>";
            // $this->con = mysqli_connect();
        }
        // use of destruct is message or working end message show after one object work 
        function __destruct(){
            echo "base function method destruct. <br>";
            // mysqli_close($this->con);
        } 
        function hello(){
            echo "base function method hello. <br>";
        }
    }

    $test = new base();

    $test->hello();
    $test->hello();

    
?>