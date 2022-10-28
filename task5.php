<?php
    function outputNum(int $A, int $B){
        if($A==$B) {
            echo $B."</br>";
        }
        else if ($A<$B){
            echo $A++.", ";
            outputNum($A++, $B);
        }
        else{
            echo $A--.", ";
            outputNum($A--, $B);
        }
    }
?>


