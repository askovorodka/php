<?php

namespace tests\latestaticbindings;

$firstCategory = FirstCategory::getInstance();

echo $firstCategory . '<br>';

$secondCategory = SecondCategory::getInstance();

echo $secondCategory . '<br>';

$mysql = Multiton::getInstance('mysql');

$redis = Multiton::getInstance('redis');

$mysql2 = Multiton::getInstance('mysql');

$redis2 = Multiton::getInstance('redis');

var_dump($mysql);
var_dump($mysql2);
var_dump($redis);
var_dump($redis2);
