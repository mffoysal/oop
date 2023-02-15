<?php
    interface base_main{
        function cal_main($a);
    }
    
    interface derived_one{
        function cal_one($b);
    }
    
    interface derived_two{
        function cal_two($c);
    }

    class derived implements base_main, derived_one, derived_two{
        public function cal_main($a = "main"){
            echo $a;
        }
        public function cal_one($a = "one"){
            echo $a;
        }
        public function cal_two($a = "two"){
            echo $a;
        }
    }

    $test = new derived();

    // $testt = new base_main();
    $test->cal_main().$test->cal_one().$test->cal_two();

    

?>