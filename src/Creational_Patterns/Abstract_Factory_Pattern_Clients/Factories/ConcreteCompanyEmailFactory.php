<?php


namespace App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Factories;


use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Classes\CompanyDiscount;
use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Classes\CompanyGoodbye;
use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Classes\CompanyGreeting;
use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Interfaces\AbstractMailElementsFactoryInterface;
use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Interfaces\DiscountInterface;
use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Interfaces\GoodbyeInterface;
use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Interfaces\GreetingInterface;

class ConcreteCompanyEmailFactory implements AbstractMailElementsFactoryInterface
{

    public function getGreetings(): GreetingInterface
    {
        return new CompanyGreeting();
    }

    public function getGoodbye(): GoodbyeInterface
    {
        return new CompanyGoodbye();
    }

    public function getDiscount(): DiscountInterface
    {
        return new CompanyDiscount();
    }
}