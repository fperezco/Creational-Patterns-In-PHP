<?php


namespace App\Creational_Patterns\Factory_Method\Classes;


use App\Creational_Patterns\Factory_Method\Interfaces\AnimalInterface;

class Dog implements AnimalInterface
{

    public function move()
    {
        echo "dog is running\n";
    }
}