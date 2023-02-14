<?php
    class userAccount{

        public $id;
        public $name;
        public $phone;
        public $balance;


        function __construct($name = "user_name", $phone = "01800000000", $balance = 100){
            $this->name = $name;
            $this->phone = $phone;
            $this->balance = $balance;
        }

    }

    $a = array();
    $a[0] = new userAccount("Farhad", "01585855075", 500);

    echo  $a[0]->name." <br>".$a[0]->phone;

    
?>
