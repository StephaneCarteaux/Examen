<?php
require_once 'car.php';
require_once 'shop.php';

$cars[] = new car(100, "Renault", "12345", Fuel::gasoil, "verde");
$cars[] = new car(110, "Citroën", "23456", Fuel::gasoline, "rojo");
$cars[] = new car(120, "Seat", "34567", Fuel::hybrid, "azul");
$cars[] = new car(200, "Porshe", "45678", Fuel::electric, "blanco");
$cars[] = new car(100, "Renault", "56789", Fuel::gasoline, "amarillo");
$cars[] = new car(100, "Ferari", "67890", Fuel::hybrid, "rojo");

$shop = new Shop($cars);

$shop->displayBrandByGasoline();
$shop->displayBrandByMaxCylinder();