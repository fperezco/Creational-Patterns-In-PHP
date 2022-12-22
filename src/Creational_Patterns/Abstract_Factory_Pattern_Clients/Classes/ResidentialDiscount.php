<?php


namespace App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Classes;


use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Interfaces\DiscountInterface;

class ResidentialDiscount implements DiscountInterface
{

    public function getPercentDiscount(): string
    {
        return "10%";
    }
}