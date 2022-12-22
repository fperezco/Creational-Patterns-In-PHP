<?php


namespace App\Creational_Patterns\Factory_Method\Classes;


use App\Creational_Patterns\Factory_Method\Interfaces\AnimalInterface;

class Fish implements AnimalInterface
{

    public function move()
    {
        // TODO: Implement move() method.
        echo "Fish is swimming\n";
    }
}