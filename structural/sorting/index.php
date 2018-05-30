<?php

namespace structural\sorting;

$sorting = new QuickSort();

$array = [];
for ($i=0; $i < 111; $i++) {
    $array[$i] = rand(0,100);
}

echo $sorting->getPrinter()->setArray($array)->printer();

$start = microtime(true);
$sorting->sort($array, 0, count($array)-1);
$end = microtime(true) - $start;
echo $sorting->getPrinter()->setArray($array)->printer();

echo "<br> time:" . $end;
echo "<br><br><br>";

$insertionSort = new InsertionSort();
$array = [];
for ($i=0; $i < 11; $i++) {
    $array[$i] = rand(0,100);
}

echo $sorting->getPrinter()->setArray($array)->printer();

$insertionSort->sort($array);

echo $sorting->getPrinter()->setArray($array)->printer();


echo "<br><br><br>";

$selectionSort = new SelectionSort();
$array = [];
for ($i=0; $i < 11; $i++) {
    $array[$i] = rand(0,100);
}

echo $sorting->getPrinter()->setArray($array)->printer();

$selectionSort->sort($array);

echo $sorting->getPrinter()->setArray($array)->printer();


echo "<br><br><br>";
$mergeSort = new MergeSort();
$array = [];
for ($i=0; $i < 11; $i++) {
    $array[$i] = rand(0,100);
}
echo $sorting->getPrinter()->setArray($array)->printer();
$array = $mergeSort->split($array);
echo $sorting->getPrinter()->setArray($array)->printer();
