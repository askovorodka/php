<?php

namespace structural\tests;

use structural\sorting\InsertionSort;

function my_callback_function() {
    echo "Hello world";
}

class MyClass {
    public static function myCallback() {
        echo "Hello world";
    }
}

echo is_callable('MyClass::myCallback');

$double = function ($a) {
    return $a * 2;
};

$numbers = range(1,5);

$new_numbers = array_map($double, $numbers);

print_r($new_numbers);

/*class QuickSort {

    public static function sort(array &$sort, int $left, int $right) {

        $middle = (int) (($left+$right) / 2);
        $p = $sort[$middle];
        $leftCurrent = $left;
        $rightCurrent = $right;

        echo $left . "-" . $middle . "-" . $right . "-" . $sort[$middle] . PHP_EOL;

        while ($leftCurrent <= $rightCurrent) {
            while ($sort[$leftCurrent] < $p) {
                $leftCurrent++;
            }

            while ($sort[$rightCurrent] > $p) {
                $rightCurrent--;
            }

            if ($leftCurrent <= $rightCurrent) {
                [$sort[$leftCurrent], $sort[$rightCurrent]] = [$sort[$rightCurrent], $sort[$leftCurrent]];
                $leftCurrent++;
                $rightCurrent--;
            }
        }

        if ($left < $rightCurrent) {
            self::sort($sort, $left, $rightCurrent);
        }

        if ($leftCurrent < $right) {
            self::sort($sort, $leftCurrent, $right);
        }

    }

}

$array = [10,1,3,4,6,5,2,8,9];
QuickSort::sort($array, 0, count($array)-1);
print_r($array);*/

/*class InsertSort {
    public static function sort(array &$array) {
        for ($i=0; $i < count($array); $i++) {
            $minIndex = $i;
            for($j = $i+1; $j < count($array); $j++) {
                if ($array[$j] < $array[$minIndex]) {
                    $minIndex = $j;
                }
            }
            if ($minIndex != $i) {
                [$array[$i], $array[$minIndex]] = [$array[$minIndex], $array[$i]];
            }
        }
    }
}

$array = [10,1,3,4,6,5,2,8,9];
InsertSort::sort($array);
print_r($array);*/
interface CategoryIface {
    public function setName(string $name): void;
}
interface ProductIface {
    public function setName(string $name): Product;
    public function getName(): string;
    public function setPrice(float $price): Product;
    public function getPrice(): float;
    public function setCategory(CategoryIface $category): Product;
}

class Product implements ProductIface {
    private $name;
    private $price;
    private $category;

    public function __construct(string $name, float $price)
    {
        $this
            ->setName($name)
            ->setPrice($price);
    }

    public function setPrice(float $price): Product
    {
        $this->price = $price;
        return $this;
    }
    public function setCategory(CategoryIface $category): Product
    {
        $this->category = $category;
        return $this;
    }
    public function setName(string $name): Product
    {
        $this->name = $name;
        return $this;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice(): float
    {
        return $this->price;

    }
}

class Factory {
    public static function create(string $name, float $price) {
        return new Product($name, $price);
    }
}

$product = Factory::create('one', 100);

class Book {
    private $title;
    private $author;
    public function setTitle(string $title) {
        $this->title = $title;
    }
    public function setAuthor(string $firstName, string $lastName) {
        $this->author = $firstName . $lastName;
    }
    public function getAuthor(): string {
        return $this->author;
    }
    public function getTitle(): string {
        return $this->title;
    }
}

class EBook {
    private $title;
    private $firstNameAuthor;
    private $lastNameAuthor;

    public function __construct(string $firstNameAuthor, string $lastNameAuthor, string $title)
    {
        $this->firstNameAuthor = $firstNameAuthor;
        $this->lastNameAuthor = $lastNameAuthor;
        $this->title = $title;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getFirstNameAuthor(): string {
        return $this->firstNameAuthor;
    }

    public function getLastNameAuthor(): string {
        return$this->lastNameAuthor;
    }

}

class EBookAdapter {
    /**
     * @var EBook $book
     */
    private $book;
    public function __construct(EBook $book)
    {
        $this->book = $book;
    }

    public function getTitle() {
        return $this->book->getTitle();
    }

    public function getAuthor() {
        return $this->book->getFirstNameAuthor() . ' ' . $this->book->getLastNameAuthor();
    }

}

$book = new EBookAdapter(new EBook('Andrey', 'Shmits', 'first book'));

//echo $book->getAuthor();

$root = dirname(__FILE__) . '/../../';
if (file_exists($root . 'dump.sql')) {
    $handle = fopen($root . 'dump.sql', 'r');
    while (($row = fgets($handle)) !== false) {
        echo $row . PHP_EOL;
    }

    fclose($handle);
}

function strMax($str){
    $array = [];
    for ($i=0; $i<strlen($str); $i++){
        if ($i == 0) {
            $j = 1;
        }
        if ($i > 0 && $str[$i-1] == $str[$i]) {
            $j++;
        } else {
            $j = 1;
        }
        if (!isset($array[$str[$i]]) || $array[$str[$i]] < $j) {
            $array[$str[$i]] = $j;
        }
    }

    return $array;
}

$result = strMax("aaaaabbbbaaccbcccbb");
print_r($result);