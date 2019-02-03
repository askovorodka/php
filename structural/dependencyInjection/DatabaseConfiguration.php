<?php

namespace structural\dependencyInjection;

class DatabaseConfiguration implements DatabaseConfigurationInterface
{
    private $host;
    private $user;
    private $database;
    private $password;
    private $port;

    public function __construct(
        string $user,
        string $password,
        string $database,
        string $host,
        string $port)
    {
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->host = $host;
        $this->port = $port;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function getDatabase(): string
    {
        return $this->database;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getPort(): int
    {
        return $this->port;
    }
}