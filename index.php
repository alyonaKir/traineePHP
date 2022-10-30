<?php

class MyCalculator
{
    public $first;
    public $second;
    public $rez;

    public function __construct($first, $second)
    {
        $this->first = $first;
        $this->second = $second;
        $rez = 0;
    }

    public function __toString(): string
    {
        return $this->rez;
    }

    public function add()
    {
        $this->rez = $this->first + $this->second;
        return $this;
    }

    public function multiply()
    {
        $this->rez = $this->first * $this->second;
        return $this;
    }

    public function divide()
    {
        if ($this->second == 0) {
            throw new Exception("Divide by 0");
        }
        $this->rez = $this->first / $this->second;
        return $this;
    }

    public function subtract()
    {
        $this->rez = $this->first - $this->second;
        return $this;
    }

    public function addBy($addNum)
    {
        $this->rez += $addNum;
        return $this;
    }

    public function divideBy($divNum)
    {
        if ($divNum == 0) {
            throw new Exception("Divide by 0");
        }
        $this->rez /= $divNum;
        return $this;
    }

    public function multiplyBy($mulNum)
    {
        $this->rez *= $mulNum;
        return $this;
    }

    public function subtractBy($subNum)
    {
        $this->rez += $subNum;
        return $this;
    }
}

?>
