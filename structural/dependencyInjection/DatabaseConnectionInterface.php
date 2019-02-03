<?php

namespace structural\dependencyInjection;


interface DatabaseConnectionInterface
{

    public function __construct(DatabaseConfigurationInterface $configuration);

    public function getDsn(): string;
}