<?php

namespace structural\adapter;

class Book implements BookInterface
{
    private $page;

    public function getPage(): int
    {
        return $this->page;
    }
    public function nextPage()
    {
        $this->page++;
    }
    public function open()
    {
        $this->page = 1;
    }
}
