<?php

class Shop{

    private array $cars;

    public function __construct($cars)
    {
        $this->cars = $cars;
    }

    public function displayBrandByGasoline()
    {
        foreach($this->cars as $car){
            if($car->getFuel() === Fuel::gasoline){
               echo $car->getBrand() . PHP_EOL;
            }
        }
    }

    public function displayBrandByMaxCylinder(){
        $cylinder = 0;
        foreach($this->cars as $car){
            if($car->getCylinder() > $cylinder){
                $cylinder = $car->getCylinder();
                $brandByCylinder = $car->getBrand();
            }
        }
        echo $brandByCylinder . PHP_EOL;
    }

}