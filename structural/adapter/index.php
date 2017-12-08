<?php
namespace structural\adapter;

$book = new Book();
$kindle = new Kindle();
$eBookAdapter = new EBookAdapter($kindle);

$book->open();
$eBookAdapter->open();

$book->nextPage();
$eBookAdapter->nextPage();

echo $book->getPage();
echo $eBookAdapter->getPage();
