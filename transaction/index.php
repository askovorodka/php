<?php

namespace transaction;

try {
    $dsn = "mysql:host=mysql;dbname=db1;charset=utf8";
    $dbh = new \PDO($dsn, "user1","password", ['PDO::ATTR_PERSISTENT' => true]);
    echo "Connection success to database";
} catch (\Exception $exception) {
    die($exception->getMessage());
}

try {

    $dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $sth = $dbh->prepare("select * from requests order by id desc");
    $sth->execute();
    $result = $sth->fetchAll();
    foreach ($result as ["id" => $id, "date_created" => $date_created]) {
        echo $id . " - " . $date_created . "<br>";
    }
    $dbh->beginTransaction();

    for($i=0; $i < 10; $i++) {
        $dbh->exec("insert into requests (date_created, comment) values ('".date("Y-m-d H:i:s")."', 'comment1')");
    }
    $dbh->commit();
} catch (\Exception $exception) {
    $dbh->rollBack();
    echo "Error: " . $exception->getMessage();
}