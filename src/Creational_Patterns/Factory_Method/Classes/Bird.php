<?php


namespace App\Creational_Patterns\Factory_Method\Classes;


use App\Creational_Patterns\Factory_Method\Interfaces\AnimalInterface;

class Bird implements AnimalInterface
{

    public function move()
    {
        // TODO: Implement move() method.
        echo "bird is flying\n";
    }
}