<?php

namespace structural\strategy;

class OutputArray implements OutputInterface
{
    public function load()
    {
        return ['one' => 1, 'two' => 2];
    }
}