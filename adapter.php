<?php
use structural\adapter as Adapter;

spl_autoload_register("AutoLoader");
function AutoLoader($class)
{
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . ".php";
    if (is_file($file)) {
        require_once $file;
    } else {
        throw new Exception("class file " . $file . " not found.");
    }
}

$book = new Adapter\Book();
$kindle = new Adapter\Kindle();
$eBook = new Adapter\EBookAdapter($kindle);

$book->open();
$eBook->open();
echo $book->getPage() . PHP_EOL;
echo $eBook->getPage() . PHP_EOL;
$book->nextPage();
$eBook->nextPage();

echo $book->getPage() . PHP_EOL;
echo $eBook->getPage() . PHP_EOL;
