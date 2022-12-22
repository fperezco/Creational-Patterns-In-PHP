<?php


namespace App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Classes;


class ResidentialGreeting implements \App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Interfaces\GreetingInterface
{

    public function getSalutation(): string
    {
        return "Hi residential friend ";
    }
}