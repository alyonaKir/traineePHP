<?php
    function singleDigit($inputNum){
        $sum = 0;
        while(strlen((string)$inputNum)!=1){
            $sum = 0;
            while($inputNum!=0) {
                $sum += $inputNum % 10;
                $inputNum = intdiv($inputNum, 10);
            }
            $inputNum = $sum;
        }
        return $sum;
    }
?>
