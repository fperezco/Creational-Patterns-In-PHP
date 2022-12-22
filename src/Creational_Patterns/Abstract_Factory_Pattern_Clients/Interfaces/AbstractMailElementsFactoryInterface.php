<?php


namespace App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Interfaces;


interface AbstractMailElementsFactoryInterface
{
    public function getGreetings(): GreetingInterface;
    public function getGoodbye(): GoodbyeInterface;
    public function getDiscount(): DiscountInterface;
}