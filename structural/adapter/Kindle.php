<?php
namespace structural\adapter;

class Kindle implements EBookInterface
{
    private $page;
    private $totalPages;

    public function pressNext()
    {
        $this->page++;
    }
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
    public function unlock()
    {
        $this->page = 1;
    }
}
