<?php


namespace App\Creational_Patterns\Factory_Method\Factories;


use App\Creational_Patterns\Factory_Method\Classes\Fish;
use App\Creational_Patterns\Factory_Method\Interfaces\AnimalFactoryInterface;
use App\Creational_Patterns\Factory_Method\Interfaces\AnimalInterface;

class EcologicAnimalFactory implements AnimalFactoryInterface
{

    public function createAnimal(): AnimalInterface
    {
        //another logic to create animals, for example:
        //consume webservice of ecology and
        //get the kind of animal who has increased its poblation

        //lot of logic here.... and as a result:
        return new Fish();

    }
}