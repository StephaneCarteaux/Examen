<?php

enum Fuel: string
{
    case gasoline = 'gasoline';
    case gasoil = 'gasoil';
    case hybrid = 'hybrid';
    case electric = 'electric';
}

class Car
{
    private int $cylinder;
    private string $brand;
    private string $registration;
    private Fuel $fuel;
    private string $color;

    public function __construct(int $cylinder, string $brand, string $registration, Fuel $fuel, string $color)
    {
        $this->cylinder = $cylinder;
        $this->brand = $brand;
        $this->registration = $registration;
        $this->fuel = $fuel;
        $this->color = $color;
    }

    public function getCylinder()
    {
        return $this->cylinder;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getregistration()
    {
        return $this->registration;
    }

    public function getFuel()
    {
        return $this->fuel;
    }

    public function getColor()
    {
        return $this->color;
    }
}
