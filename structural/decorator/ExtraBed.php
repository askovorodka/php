<?php
/**
 * Created by PhpStorm.
 * User: ashmits
 * Date: 02.02.19
 * Time: 21:13
 */

namespace structural\decorator;


class ExtraBed extends BookingDecorator
{
    const PRICE = 20;

    public function getPrice(): int
    {
        return $this->booking->getPrice() + self::PRICE;
    }

    public function getTitle(): string
    {
        return $this->booking->getTitle() . ' include extra bed';
    }
}