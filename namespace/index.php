<?php
    require 'first.php';
    require 'second.php';

    function campus(){
        echo "Index Campus Function. <br>";
    }

    use first\v1\one as firstOne;
    use second\v1\one as secondOne;

    $test = new firstOne\campus();
    
    $test1 = new secondOne\campus();

    campus();
    firstOne\campus();

    $testt = new secondOne\second();

?>