<?php

// invoke code 

class base_c{
    public $n = 5;
    public $m = 7;
    public $name = "farhad invoke";


    public function __construct($n = 2, $m =3)
    {
        $this->n = $n;
        $this->m = $m;
    }

    public function showName()
    {
        // echo "<br>".$this->name." Hello <br>".$this->n;
        echo $this->n*$this->m;
    }

    public function __invoke()
    {
        echo $this->name. "<br>" . $this->n + $this->m;
    }
}

$inv = new base_c(5,10);

$inv->showName();

$inv();

?>