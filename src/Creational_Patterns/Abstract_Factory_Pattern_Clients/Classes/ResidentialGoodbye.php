<?php


namespace App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Classes;


class ResidentialGoodbye implements \App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Interfaces\GoodbyeInterface
{

    public function getFarewell(): string
    {
        return "bye residential friend!!";
    }
}