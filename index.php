<?php

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

    public function addWithAnotherMatrix($inMatr)
    {
        for ($i = 0; $i < $this->rows; $i++) {
            for ($j = 0; $j < $this->colums; $j++) {
                $this->matr[$i][$j] += $inMatr[$i][$j];
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

    public function multyMatrix(Matrix $inMatr)
    {
        if ($this->colums != $inMatr->rows) {
            throw new Exception('Incompatible matrixes');
        }
        $m3 = array();
        for ($i = 0; $i < $this->rows; $i++) {
            for ($j = 0; $j < $inMatr->colums; $j++) {
                $m3[$i][$j] = 0;
                for ($k = 0; $k < $inMatr->rows; $k++) {
                    $m3[$i][$j] += $this->matr[$i][$k] * $inMatr->matr[$k][$j];
                }
            }
        }
        return $m3;
    }
}

?>