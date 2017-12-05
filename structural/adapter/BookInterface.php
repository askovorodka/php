<?php

namespace structural\adapter;

interface BookInterface {
    public function open();
    public function getPage(): int;
    public function nextPage();
}

