<?php
namespace structural\singleton;

interface DataBaseIface {
    public static function getInstance();
    public function connect();
}