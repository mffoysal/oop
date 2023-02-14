<?php


$arr = array('this', 'that', 'what');

echo "Array : $arr[0] , $arr[1] , $arr[2] <br>";

$arr = ['this', 'that', 'what'];

echo "Array : $arr[0] , $arr[1] , $arr[2] <br>";

$associate = array(
                    'farhad' => 'hi',
                    'foysal' => 'hello',
                    'moni' => 'assalamualaikum',
                    5=> 'WalaikumAssalam'  
                );

echo  "Farhad : ".$associate['farhad']. ", Foysal : " .$associate['foysal']. ", Moni : " .$associate['moni'] ;


echo "<br> $associate[5] <br>";

        foreach($associate as $key => $value){
            echo "User ~ $key : $value <br>";
        }

$multiArray = array(
                array(2,5,7,8),
                array(1,3,6,5),
                array(4,5,9,6),
                array(2,3,1,2));        

                // echo var_dump($multiArray);

                // echo $multiArray[1][0];
                for($i=0; $i<count($multiArray); $i++){
                    echo var_dump($multiArray[$i]);
                    echo "<br>";
                }

for($i=0; $i<count($multiArray); $i++){
    for($j = $i; $j<count($multiArray[$i]); $j++){
        echo "  ".$multiArray[$i][$j];
    }
    echo "<br>";
}

for($i=0; $i<count($multiArray); $i++){
    for($j = $i; $j<count($multiArray[$i]); $j++){
        echo "".$multiArray[$j][$i]."  ";
    }
    echo "<br>";
}

for($i=0; $i<count($multiArray); $i++){
    for($j = 0; $j<count($multiArray[$i]); $j++){
        echo "  ".$multiArray[$i][$j];
    }
    echo "<br>";
}




?>