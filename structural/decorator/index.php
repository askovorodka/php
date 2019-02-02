<?php
/**
 * Created by PhpStorm.
 * User: ashmits
 * Date: 02.02.19
 * Time: 21:08
 */

namespace structural\decorator;

try {

    $singleRoom = new SingleRoom();
    $singleRoomExtraBed = new ExtraBed($singleRoom);
    $singleRoomWifi = new Wifi($singleRoom);
    $singleRoomExtraBedAndWifi = new Wifi($singleRoomExtraBed);

    echo $singleRoom->getPrice() . ' - ' . $singleRoom->getTitle() . '<br>';
    echo $singleRoomExtraBed->getPrice() . ' - ' . $singleRoomExtraBed->getTitle() . '<br>';
    echo $singleRoomWifi->getPrice() . ' - ' . $singleRoomWifi->getTitle() . '<br>';
    echo $singleRoomExtraBedAndWifi->getPrice() . ' - ' . $singleRoomExtraBedAndWifi->getTitle();

} catch (\Exception $exception) {
    echo $exception->getTraceAsString();
}