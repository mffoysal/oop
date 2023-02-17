<?php
    namespace second\v1\one{

        class second{
            function __construct(){
                echo "second Campus function. <br>";
                // $test = new \first\v1\one\first();
                $test = new \first\v1\one\first;
                $test->campus();
            }
            public function student(){
                echo "Student Function";
            }
        }
        class campus{
            function __construct(){
                echo "second Campus function. <br>";
            }
            public function campus(){
                echo "second Campus Function. <br>";
            }
        }

    }
?>