<?php


namespace App\Creational_Patterns\Factory_Method\Factories;


use App\Creational_Patterns\Factory_Method\Classes\Bird;
use App\Creational_Patterns\Factory_Method\Classes\Dog;
use App\Creational_Patterns\Factory_Method\Classes\Fish;
use App\Creational_Patterns\Factory_Method\Interfaces\AnimalFactoryInterface;
use App\Creational_Patterns\Factory_Method\Interfaces\AnimalInterface;

class RandomAnimalFactory implements AnimalFactoryInterface
{

    public function createAnimal(): AnimalInterface
    {
        $randomNumber = rand(1, 3);
        if($randomNumber == 1){
            return new Bird();
        }
        if($randomNumber == 2){
            return new Dog();
        }
        if($randomNumber == 3){
            return new Fish();
        }

    }
}