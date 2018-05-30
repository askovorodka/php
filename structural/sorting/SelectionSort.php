<?php
namespace structural\sorting;

class SelectionSort {

    public function sort(array &$array) {
        for ($i=0; $i < count($array); $i++) {
            $min = $array[$i];
            for ($j = $i+1; $j < count($array); $j++) {
                if ($array[$j] < $min) {
                    $key = $j;
                    $min = $array[$key];
                }
            }
            if (isset($key)) {
                [$array[$i], $array[$key]] = [$array[$key], $array[$i]];
            }
        }
    }

}