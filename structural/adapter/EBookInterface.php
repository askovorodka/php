<?php
namespace structural\adapter;

interface EBookInterface
{
    public function unlock();
    public function pressNext();
    public function getPage(): array ;
}
