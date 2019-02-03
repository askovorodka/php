<?php

namespace structural\dependencyInjection;


class DatabaseConnection implements DatabaseConnectionInterface
{
    /** @var DatabaseConfigurationInterface $configuration */
    protected $configuration;

    public function __construct(DatabaseConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getDsn(): string
    {
        return sprintf('mysql://%s:%s@%s:%s/%s',
            $this->configuration->getUser(),
            $this->configuration->getDatabase(),
            $this->configuration->getHost(),
            $this->configuration->getPort(),
            $this->configuration->getDatabase()
            );
    }
}