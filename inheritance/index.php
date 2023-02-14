<?php
    class vichle{
        public $name;
        private $color;
        private $price;
        public $brand;
        private $n_stock;
        private $fuel;
        public $driver;
    
        function __construct($name = "vichle", $colour = "white", $price = "1500000", $brand = "brand", $fuel = 1){
            $this->name = $name;
            $this->color = $colour;
            $this->price = $price;
            $this->brand = $brand;
            $this->fuel = $fuel;
        }

        function stockVichle(){

        }

        function buyVichle(){

        }

        function supportVichle(){

        }

    }

    class car extends vichle{
        public $num_car =  0;
        public $tax = 12/100;

        function __construct($name , $colour , $price , $brand , $fuel , $i){
           
            parent::__construct($name , $colour , $price , $brand , $fuel);
            $this->num_car+=$i;
            $this->tax*=$price;
            // echo $this->num_car;
            
        }

        function num_car(){
            return $this->num_car;
        }

    }
    
    class bus extends vichle{
        private $num_bus = 0;
        public $tax = 10/100;
        function __construct($name , $colour , $price , $brand , $fuel , $i){
           
            parent::__construct($name , $colour , $price , $brand , $fuel);
            $this->num_bus+=$i;
            $this->tax*=$price;
            // echo $this->num_bus;
            
        }

        function num_bus(){
            return $this->num_bus;
        }
    }

    class driver{
        private $id=0;
        public $d_name;
        public $d_phone;

        // function incr_id(){
        //     $id+=1;
        // }

        function __construct($name,$phone){
            $this->d_name = $name;
            $this->d_phone = $phone;

            // incr_id();

        }

    }


    $bus = array();
    $d = array();
    // $bus[0] = new vichle();

    $bus[0] = new car("Car-1","blue","2500000","hondai",5,1);


    $bus[1] = new bus("bus-1","blue","350000","hondai",5,2);

    $d[0] = new driver("Farhad Foysal","01816444372");
    $d[1] = new driver("Faid Ahmed","01585855075");

    $bus[0]->driver = $d[0];
    $bus[1]->driver = $d[1];

    echo "Veichle name: ".$bus[0]->name."<br>V.Id: ".$bus[0]->num_car()."<br>Tax: ".$bus[0]->tax."<br>D.Name: ".$bus[0]->driver->d_name."<br>D.Phone: ".$bus[0]->driver->d_phone;

    echo "<br>Veichle name: ".$bus[1]->name."<br>V.Id: ".$bus[1]->num_bus()."<br>Tax: ".$bus[1]->tax."<br>D.Name: ".$bus[1]->driver->d_name."<br>D.Phone: ".$bus[1]->driver->d_phone;


    
?>