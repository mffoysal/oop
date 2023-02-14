<?php

    class player{
        public $name = "null";
        public $speed = 5;
        public $running = false;

        // function __construct($name){
        //     $this->name = $name;
        //     $this->speed = $s;
        //     $this->running = true;
        // }

        function __construct($name = "Farhad Name"){
            $this->name = $name;
            // $this->speed = $s;
            $this->running = true;
        }
        function __destruct(){
            echo "hello destruct <br>";
        }

        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }
        function get_run(){
            return $this->running = true;
        }
        function stopRun(){
            return $this->running = false;
        }
    }

    $p1 = new player("Farhad");

    $p2 =  new player("Foysal");

    $p1->set_name("Farhad Foysal");.
    $p2->set_name("Farhad MOni");

    echo $p1->get_name()." <br>".$p2->get_name()."<br>".$p2->get_run()."<br>";

    $p3 = new player("Moni");

    echo $p3->name."<br>";

    $p4 = new player("constractor_name");

    echo $p4->name."<br>";

    $p5 = new player("");

    

?>