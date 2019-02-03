<?php

namespace structural\dependencyInjection;

try {
    $dbConfig = new DatabaseConfiguration("user", "password", "db", "localhost", 3306);
    $dbConnection = new DatabaseConnection($dbConfig);
    echo $dbConnection->getDsn();
}catch (\Exception $exception) {
    echo $exception->getTraceAsString();
}