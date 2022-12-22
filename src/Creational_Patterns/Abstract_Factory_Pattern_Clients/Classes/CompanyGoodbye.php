<?php


namespace App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Classes;


class CompanyGoodbye implements \App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Interfaces\GoodbyeInterface
{

    public function getFarewell(): string
    {
        return "Regards dear company customer";
    }
}