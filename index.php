<?php

class Point
{
    public int $x;
    public int $y;
}

class Way
{
    public Point $points;
    public function __construct(Point $p){
        $points[] = $p;
    }

    public function contains(Point $p){
        for($i=0; $i < count($this->points); $i++){
            if($this->points[$i]->x == $p->x && $this->points[$i]->y == $p->y){
                return true;
            }
        }
        return false;
    }

    public function __toString(){
        $str="";
        foreach($this->points as $p){
            $str.="(".$p->x.", ".$p->y.") ";
        }
        return $str;
    }

    public function calculate($field, Way $way, Point $A, Point $B){
       for($i=$A->y; $i<10; $i++){
           for($j=$A->x; $j<10; $j++){
               if($field[$i][$j]==1){

               }
           }
       }
    }
}


//генерация поля
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $field[$i][$j] = rand(0, 1);
        echo $field[$i][$j] . " ";
    }
    echo "</br>";
}
?>