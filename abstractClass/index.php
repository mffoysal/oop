<?php
    //Abstract Class means secured class but we use base class by derived class

    abstract class base{
        protected $name;
        public function __construct($n = "Name"){
            $this->name = $n;
        }
        abstract protected function show($a, $b);
        protected function calculate(){
            echo $this->name;
        }
     }

     class derived extends base{
        public function show($c, $d){
            echo $this->calculate()."<br>".$this->name."<br>".$c*$d;
        }
     }
     $test = new derived("Farhad Foysal");
     
     $test->show(2,3);
    //  $test->calculate();
    
?>