<?php

    echo readfile("index.txt");
    echo "<br>";
    readfile("index.txt");

    echo "<br>";

    $fopen = fopen("index.txt", "r");

    echo var_dump($fopen);

    if(!$fopen){
        die("unable to open this file. please enter valid filename");
    }


    // $content = fread($fopen, 70);
    
    $content = fread($fopen, filesize("index.txt"));
    fclose($fopen);

    echo $content."<br>";

    $fopen = fopen("index.txt", "r");
    // echo fgets($fopen)."<br>";
    // echo fgets($fopen)."<br>";
    // echo fgets($fopen)."<br>";

    // while($a=fgets($fopen)){
    //     echo $a."<br>";
    // }

    // while($a=fgetc($fopen)){
    //     echo $a." ";
        
    // }


    while($a=fgetc($fopen)){
        echo $a." ";
        if($a==".."){
            break;
        }   
    }
    echo "<br>";

    fclose($fopen);

    $fopen = fopen("index.txt", "w");
    fwrite($fopen, "This is the best file on this planet. Please don't argue with me on this one.");
    
    fwrite($fopen, "This is another content, This is the best file on this planet. Please don't argue with me on this one.");
    
    fwrite($fopen, "write three.\n");
    fclose($fopen);


    $fopen = fopen("index.txt", "a");
    fwrite($fopen, "This is the best file on this planet. Please don't argue with me on this one.");
    
    fwrite($fopen, "This is another content, This is the best file on this planet. Please don't argue with me on this one.");
    
    fwrite($fopen, "write three.\n");
    fclose($fopen);
?>