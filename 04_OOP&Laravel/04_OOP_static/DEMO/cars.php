<?php

class Car
{

    static public $type = 'Car';

    static public function getCarType()
    {
        return self::$type;
    }

    public function cangeCarType($newType)
    {

        self::$type = $newType;
    }
}



$newCar = new Car;

$newCar->cangeCarType('BMW');

echo Car::getCarType();
