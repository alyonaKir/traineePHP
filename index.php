<?php
//добавить умножение матриц и сделать матрицу дробной
class Matrix
{
    public $matr;
    public int $rows;
    public int $colums;

    public function __construct($matr, int $rows, int $colums)
    {
        $this->matr = $matr;
        $this->rows = $rows;
        $this->colums = $colums;
    }

    public function addWithAnotherMatrix($inMatr){
        for ($i = 0; $i < $this->rows; $i++) {
            for ($j = 0; $j < $this->colums; $j++) {
                $this->matr[$i][$j] +=$inMatr[$i][$j];
            }
        }
    }

    public function multyByNum($number)
    {
        for ($i = 0; $i < $this->rows; $i++) {
            for ($j = 0; $j < $this->colums; $j++) {
                $this->matr[$i][$j] *= $number;
            }
        }
    }

    public function printMatr()
    {
        for ($i = 0; $i < $this->rows; $i++) {
            for ($j = 0; $j < $this->colums; $j++) {
                echo $this->matr[$i][$j] . "\t";
            }
            echo "</br>";
        }
    }

    public function multyMatrix()
    {

    }
}

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $a[$i][$j] = rand(1, 15) * 1.05;
    }
}
$m = new Matrix($a, 4, 4);
$m->printMatr();
echo "</br>";
$m->multyByNum(2);
echo "</br>";
$m->printMatr();
?>