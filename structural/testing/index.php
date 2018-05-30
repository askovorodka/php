<?php
namespace structural\testing;
use structural\bridge as Bridge;

try {

    $testing = new Testing();
    $printer = new Bridge\Printer();

    $testing->setString(null);
    //echo $testing->getTest();

    [$id1, $test] = ["onetwothree", 1];
    //echo $id1;
    //echo $test;

    $data = [
        [1, "Tom"],
        [2, "Fred"],
    ];
    $id = "id";
    $name = "name";
    foreach ($data as [$id, $name]) {
        //echo $name;
    }

    $data = [
        ["id" => 1, "name" => "Tom"],
        ["id" => 2, "name" => "Fred"],
    ];
    ["id" => $id1, "name" => $name1] = $data[0];


    echo $name1;
    foreach ($data as ["id" => $id, "name" => $name]) {
        echo $name;
    }

    var_dump("abcdef"[-2]);

    echo strpos("heollo", "o", -4);

    $string = "helloworld";
    echo "<br>" . $string[-1];
    //$printer->setString($name1)->printer();


} catch (\Exception $exception) {
    echo $exception->getMessage();
} finally {
    echo ("end");
}