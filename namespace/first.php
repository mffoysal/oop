<?php
    namespace first\v1\one;
    class first{

        function __construct(){
            echo "first Campus function. <br>";
        }
        public function campus(){
            echo "hi first Campus Function. <br>";
        }
    }
    class campus{
        function __construct(){
            echo "first Campus function. <br>";
        }

        public function campus(){
            echo "First Campus Function. <br>";
        }
    }

    function campus(){
        echo "First out class Campus Function. <br>";
    }
    
?>