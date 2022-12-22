<?php

namespace App\Creational_Patterns\Abstract_Factory_Pattern_Clients\ClientCode;

use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Interfaces\AbstractMailElementsFactoryInterface;

class ClientCodeAbstractFactory
{
    private $factory;

    public function __construct(AbstractMailElementsFactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function getEmail(): string
    {
        $emailContent = $this->factory->getGreetings()->getSalutation();
        $emailContent .= "so we will make a discount of: ";
        $emailContent .= $this->factory->getDiscount()->getPercentDiscount();
        $emailContent .= " and ";
        $emailContent .= $this->factory->getGoodbye()->getFarewell();
        return $emailContent;
    }
}