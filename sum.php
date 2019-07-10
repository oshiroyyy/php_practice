<?php
    function sum($max) {
        $result = 0;
        for($i = 1; $i <= $max; $i++){
            $result += $i;
        }
        return $result;
    }
    echo sum(100);
?>



<?php
    function multipleNumber($number){
        echo $number * 2;
    }
    multipleNumber(2)
?>

<?php
    function printSum($a,$b){
        echo $a + $b;
    }
    printSum(2,4)
?>

