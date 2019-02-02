<?php
/**
 * Created by PhpStorm.
 * User: ashmits
 * Date: 02.02.19
 * Time: 21:18
 */

namespace structural\decorator;


class Wifi extends BookingDecorator
{
    public function getPrice(): int
    {
        return $this->booking->getPrice();
    }

    public function getTitle(): string
    {
        return $this->booking->getTitle() . ' and include wifi';
    }
}