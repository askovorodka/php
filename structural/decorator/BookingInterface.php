<?php
/**
 * Created by PhpStorm.
 * User: ashmits
 * Date: 02.02.19
 * Time: 21:05
 */

namespace structural\decorator;


interface BookingInterface
{
    public function getPrice(): int;
    public function getTitle(): string;
}