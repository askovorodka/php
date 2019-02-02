<?php
/**
 * Created by PhpStorm.
 * User: ashmits
 * Date: 02.02.19
 * Time: 21:13
 */

namespace structural\decorator;


abstract class BookingDecorator implements BookingInterface
{
    /** @var BookingInterface $booking */
    protected $booking;

    public function __construct(BookingInterface $booking)
    {
        $this->booking = $booking;
    }
}