<?php


namespace App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Factories;


use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Classes\ResidentialDiscount;
use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Classes\ResidentialGoodbye;
use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Classes\ResidentialGreeting;
use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Interfaces\AbstractMailElementsFactoryInterface;
use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Interfaces\DiscountInterface;
use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Interfaces\GoodbyeInterface;
use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Interfaces\GreetingInterface;

class ConcreteResidentialEmailFactory implements AbstractMailElementsFactoryInterface
{

    public function getGreetings(): GreetingInterface
    {
        return new ResidentialGreeting();
    }

    public function getGoodbye(): GoodbyeInterface
    {
        return new ResidentialGoodbye();
    }

    public function getDiscount(): DiscountInterface
    {
        return new ResidentialDiscount();
    }
}