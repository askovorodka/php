<?php

namespace structural\sorting;

final class InsertionSort {

    public function sort(array &$array) {
        for ($i = 0; $i < count($array)-1; $i++) {
            if ($array[$i] > $array[$i+1]) {
                $j = $i+1;
                while ($j > 0) {
                    if ($array[$j-1] > $array[$j]) {
                        [$array[$j-1], $array[$j]] = [$array[$j], $array[$j-1]];
                        //$temp = $array[$j-1];
                        //$array[$j-1] = $array[$j];
                        //$array[$j] = $temp;
                    } else {
                        break;
                    }
                    $j--;
                }
            }
        }
    }

}