<?php
namespace structural\strategy;

class OutputJson implements OutputInterface
{
    public function load()
    {
        return json_encode(['one' => 1, 'two' => 2]);
    }
}