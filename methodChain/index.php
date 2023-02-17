<?php
    class base{
        function __construct(){
            echo "base construct method. <br>";
        }

        function one(){
            echo "base function method one. <br>";
            return $this;
        }

        function two(){
            echo "base function method two. <br>";
            return $this;
        }

        function three(){
            echo "base function method three. <br>";
            return $this;
        }
        function four(){
            echo "base function method four. <br>";
            return $this;
        }
        

    }

    $test = new base();

    $test->one()->two()->three()->four();
    
?>