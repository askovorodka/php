<?php

namespace structural\dependencyInjection;


interface DatabaseConfigurationInterface
{
    public function getHost(): string;
    public function getUser(): string;
    public function getDatabase(): string;
    public function getPassword(): string;
    public function getPort(): int;
}