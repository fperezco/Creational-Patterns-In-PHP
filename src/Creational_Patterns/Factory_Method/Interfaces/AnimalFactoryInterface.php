<?php


namespace App\Creational_Patterns\Factory_Method\Interfaces;


interface AnimalFactoryInterface
{
    public function createAnimal(): AnimalInterface;
}