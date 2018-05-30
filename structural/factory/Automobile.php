<?php
namespace structural\factory;

class Automobile {
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel(): ?string {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}