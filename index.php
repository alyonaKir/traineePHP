<?php

class Point
{
    public int $x;
    public int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString()
    {
        return $this->x . ", " . $this->y;
    }
}

class Way
{
    public array $points;

    public function add(Point $p)
    {
        $this->points[] = $p;
    }

    public function contains(Point $p): bool
    {
        for ($i = 0; $i < count($this->points); $i++) {
            if ($this->points[$i]->x == $p->x && $this->points[$i]->y == $p->y) {
                return true;
            }
        }
        return false;
    }

    public function __toString()
    {
        $str = "";
        foreach ($this->points as $p) {
            $str .= "(" . $p->x . ", " . $p->y . ") ";
        }
        return $str;
    }

}

class Finder
{
    public $field;
    public int $n = 0;
    private $shortestWay;

    public function __construct(int $num)
    {
        $this->n = $num;
        $this->fill();
    }

    public function fill()
    {
        for ($i = 0; $i < $this->n; $i++) {
            for ($j = 0; $j < $this->n; $j++) {
                $this->field[$i][$j] = rand(0, 1);
                echo $this->field[$i][$j] . " ";
            }
            echo "</br>";
        }

    }

    public function calculate(Way $way, Point $A, Point $B)
    {
        $result = array();
        $points = array();
        if ($A->x > 0 && $this->field[$A->x - 1][$A->y] == 0) {
            $points[] = new Point($A->x - 1, $A->y);
        } //Left
        if ($A->x < $this->n - 1 && $this->field[$A->x + 1][$A->y] == 0) {
            $points[] = new Point($A->x + 1, $A->y);
        } //Right
        if ($A->y > 0 && $this->field[$A->x][$A->y - 1] == 0) {
            $points[] = new Point($A->x, $A->y - 1);
        } //Down
        if ($A->x < $this->n - 1 && $this->field[$A->x][$A->y + 1] == 0) {
            $points[] = new Point($A->x, $A->y + 1);
        } //Up

        if (count($points) == 0) return null;
        foreach ($points as $p) {
            if ($way->contains($p)) continue;
            if ($p == $B) $result[] = $this->createWayBranch($way, $p);
            else {
                $temp = $this->calculate($this->createWayBranch($way, $p), $p, $B);
                if ($temp == null) continue;
                foreach ($temp as $w) {
                    $result[] = $w;
                }
            }
        }
        return $result;
    }

    public function createWayBranch(Way $way, Point $point): Way
    {
        $temp = new Way();
        foreach ($way->points as $p) {
            $temp->points[] = $p;
        }
        $temp->points[] = $point;
        return $temp;
    }

    public function getShortWay($ways): Way
    {
        for ($i = 0; $i < count($ways); $i++) {
            for ($j = 0; $j < count($ways) - 1; $j++) {
                if (count($ways[$j]->points) > count($ways[$j + 1]->points)) {
                    $temp = $ways[$j];
                    $ways[$j] = $ways[$j + 1];
                    $ways[$j + 1] = $temp;
                }
            }
        }
        return $ways[0];
    }

    public function start(int $x1, int $y1, int $x2, int $y2)
    {
        $A = new Point($x1, $y1);
        $tempWay = new Way();
        $tempWay->add($A);
        $ways = $this->calculate($tempWay, $A, new Point($x2, $y2));
        if ($ways == null) {
            $this->shortestWay = "No way";
            echo "</br>no way.";
        } else {
            $this->shortestWay = $this->getShortWay($ways);
            echo $this->getShortWay($ways);
        }
    }
}

$s = file_get_contents('store');
$f = unserialize($s);
if (!is_array($f)) {
    $f = new Finder(10);
    $f->start(0, 0, 1, 3);
}
$s = serialize($f);
file_put_contents('store', $s);
?>

