<?php
namespace mysql;
use structural\singleton as Sin;

$root = dirname(__FILE__) . '/../';
if (file_exists($root . 'autoload.php')) {
    require_once $root . 'autoload.php';
}

$result = Sin\Singleton::getInstance()->connect()->query('show tables');

print_r($result->fetch(\PDO::FETCH_ASSOC));

$users = [
    ['fisrtname' => 'Andrei', 'lastname'=>'Petrov', 'name'=>'', 'email' => 'petrov@ya.ru', 'sex'=>'male'],
    ['fisrtname' => 'Sergei', 'lastname'=>'Sergeiv', 'name'=>'', 'email' => 'petrov@ya.ru', 'sex'=>'male'],
    ['fisrtname' => 'Pavel', 'lastname'=>'Pavelv', 'name'=>'', 'email' => 'petrov@ya.ru', 'sex'=>'male'],
    ['fisrtname' => 'Anton', 'lastname'=>'Antonov', 'name'=>'', 'email' => 'petrov@ya.ru', 'sex'=>'male'],
    ['fisrtname' => 'Ivan', 'lastname'=>'Petrov', 'name'=>'', 'email' => 'petrov@ya.ru', 'sex'=>'male'],
    ['fisrtname' => 'Sasha', 'lastname'=>'Petrov', 'name'=>'', 'email' => 'petrov@ya.ru', 'sex'=>'male'],
    ['fisrtname' => 'Ilya', 'lastname'=>'Petrov', 'name'=>'', 'email' => 'petrov@ya.ru', 'sex'=>'male'],
    ['fisrtname' => 'Roman', 'lastname'=>'Petrov', 'name'=>'', 'email' => 'petrov@ya.ru', 'sex'=>'male'],
    ['fisrtname' => 'Nikolay', 'lastname'=>'Petrov', 'name'=>'', 'email' => 'petrov@ya.ru', 'sex'=>'male'],
    ['fisrtname' => 'Ignat', 'lastname'=>'Petrov', 'name'=>'', 'email' => 'petrov@ya.ru', 'sex'=>'male'],
    ['fisrtname' => 'Artur', 'lastname'=>'Petrov', 'name'=>'', 'email' => 'petrov@ya.ru', 'sex'=>'male'],
    ['fisrtname' => 'Artem', 'lastname'=>'Petrov', 'name'=>'', 'email' => 'petrov@ya.ru', 'sex'=>'male'],
    ['fisrtname' => 'Dima', 'lastname'=>'Petrov', 'name'=>'', 'email' => 'petrov@ya.ru', 'sex'=>'male'],

];

$genders = ['male', 'female'];

$queryStrArray = [];
for ($i=0; $i<300000; $i++) {
    $index = rand(0,12);
    $gender = rand(0,1);

    $birthday = rand(1,28);
    $birthmonth = rand(1,12);
    $birthyear = rand(1950, 2000);

    array_push($queryStrArray, "('"
            .$users[$index]['firstname']."','"
            .$users[$index]['lastname']."','"
            .$users[$index]['name']."','"
            .$users[$index]['email']."', '"
            .$genders[$gender]."', '".$birthday."', '".$birthmonth."', '".$birthyear."')");

    if ($i%10000 == 1) {
        Sin\Singleton::getInstance()->connect()->query("
          INSERT into users (firstname, lastname, name, email,gender, birthday, birthmonth, birthyear) 
          VALUES " . implode(",", $queryStrArray));

        echo 'insert rows' . $i . PHP_EOL;
        $queryStrArray = [];
    }

    /*if (!empty($users[$index])) {
        Sin\Singleton::getInstance()->connect()->query("
INSERT into users (firstname, lastname, name, email,gender, birthday, birthmonth, birthyear) 
VALUES ('"
            .$users[$index]['firstname']."','"
            .$users[$index]['lastname']."','"
            .$users[$index]['name']."','"
            .$users[$index]['email']."', '"
            .$genders[$gender]."', '".$birthday."', '".$birthmonth."', '".$birthyear."')");

        echo 'insert row' . $i . PHP_EOL;
    }*/

}