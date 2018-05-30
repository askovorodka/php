<?php

namespace structural\sorting;

class MergeSort {
    public function split(array $array) {
        if (count($array) == 1) {
            return $array;
        }
        $middle = (int) (count($array) / 2);
        $left = $this->split(array_slice($array, 0, $middle));
        $right = $this->split(array_slice($array, $middle));

        $result = $this->merge($left, $right);

        return $result;
    }

    public function merge(array $array1, array $array2) {
        $result = [];
        $i=0;
        while (count($array1) > 0 && count($array2) > 0) {
            if ($array1[0] <= $array2[0]) {
                array_push($result, $array1[0]);
                array_shift($array1);
            } else {
                array_push($result, $array2[0]);
                array_shift($array2);
            }
        }
        if (!empty($array1)) {
            $result = array_merge($result, $array1);
        } elseif (!empty($array2)) {
            $result = array_merge($result, $array2);
        }

        return $result;

    }
}