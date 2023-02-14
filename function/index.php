<p>php function</p>
<?php
    function processMarks($marksA){
        $sum = 0;
        foreach($marksA as $value){
            $sum+=$value;
        }
        return $sum;
    }

    $farhad = [40,50,60,70,80,90,100];
    $sumMarks = processMarks($farhad);

    $foysal = [30,20,10,40,50,60,70];
    $sumMarksf = processMarks($foysal);
    echo "Total marks by farhad is $sumMarks <br> ";
    echo "Total marks by foysal is $sumMarksf ";
?>