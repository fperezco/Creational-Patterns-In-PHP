<?php

namespace App\Tests\Creational_Patterns\Factory_Method_Pattern_Animals;

use App\Creational_Patterns\Factory_Method\Factories\EcologicAnimalFactory;
use App\Creational_Patterns\Factory_Method\Factories\RandomAnimalFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function test_that_factory_ecologic_return_an_instance_of_animal_type()
    {
        //GIVEN
        $factory = new EcologicAnimalFactory();

        //WHEN
        $animal = $factory->createAnimal();

        //THEN
        $this->assertTrue(
            method_exists($animal, 'move')
        );
    }

    public function test_that_factory_random_return_an_instance_of_animal_type()
    {
        //GIVEN
        $factory = new RandomAnimalFactory();

        //WHEN
        $animal = $factory->createAnimal();

        //THEN
        $this->assertTrue(
            method_exists($animal, 'move')
        );
    }
}