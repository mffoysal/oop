<?php

date_default_timezone_set("Asia/Dhaka");
$today=date("Y-m-d");
$time= date("h:i:s");


$dateef = strtotime($today);
      
$monthh = date('m', $dateef);
$yearr= date('Y', $dateef);

$mon = date('m', $dateef);
$yea= date('Y', $dateef);



$ran_id = rand(time(), 1000000000);
$referr = strtoupper(bin2hex(random_bytes(1)));

    $d = date("l");
        echo "today is $d <br>";
    $d = date("d l");
        echo "today is $d <br>";
    $d = date("d D");
        echo "today is $d <br>";    
    $d = date("l dS F Y");
        echo "today is $d <br>"; 
        $d = date("l dS F Y, g:i A");
        echo "today is $d <br>"; 
        $d = date("l dS F Y h:i:s A");
        echo "today is $d <br>";    
         
        

?>