<?php
/**
 * Created by PhpStorm.
 * User: ashmits
 * Date: 02.02.19
 * Time: 21:09
 */

namespace structural\decorator;

class SingleRoom implements BookingInterface
{
    public function getPrice(): int
    {
        return 12;
    }

    public function getTitle(): string
    {
        return 'single room';
    }
}