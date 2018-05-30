<?php

namespace structural\sorting;
use structural\bridge as Bridge;

class QuickSort {
    private $array;
    private $printer;

    public function __construct()
    {
        $this->printer = new Bridge\Printer();
    }

    public function setArray(array $array) {
        $this->array = $array;
    }

    public function getPrinter() {
        return $this->printer;
    }

    public function getArray() {
        return $this->array;
    }

    public function sort(&$array, $left, $right)
    {
        $middle = (int) (($left + $right) / 2);
        //$left = 0;
        //$right = count($this->array) - 1;
        $i = $left;
        $j = $right;
        $p = $array[$middle];

        while($i <= $j) {
            while ($array[$i] < $p) {
                $i++;
            }
            while ($array[$j] > $p) {
                $j--;
            }

            if ($i <= $j) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
                $i++;
                $j--;
            }
        }

        if ($i < $right) {
            $this->sort($array, $i, $right);
        }

        if ($j > $left) {
            $this->sort($array, $left, $j);
        }

    }
}