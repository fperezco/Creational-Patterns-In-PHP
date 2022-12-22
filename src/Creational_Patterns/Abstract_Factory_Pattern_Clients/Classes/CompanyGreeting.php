<?php


namespace App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Classes;


class CompanyGreeting implements \App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Interfaces\GreetingInterface
{

    public function getSalutation(): string
    {
        return "Hi company ";
    }
}