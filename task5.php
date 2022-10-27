<?php
    function outputNum(int $A, int $B): string{
        static $rez="";
        if($A==$B) {
            $rez.=$B;
        }
        else if ($A<$B){
            $rez.=$A++.", ";
            outputNum($A++, $B);
        }
        else{
            $rez.=$A--.", ";
            outputNum($A--, $B);
        }
        return $rez;
    }
?>


