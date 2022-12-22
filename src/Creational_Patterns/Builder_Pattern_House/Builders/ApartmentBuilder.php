<?php

namespace App\Creational_Patterns\Builder_Pattern_House\Builders;

use App\Creational_Patterns\Builder_Pattern_House\Classes\HouseWithBuilder;
use App\Creational_Patterns\Builder_Pattern_House\Interfaces\HouseBuilderInterface;
use App\Creational_Patterns\Builder_Pattern_House\Traits\ConstructorTrait;

class ApartmentBuilder implements HouseBuilderInterface
{
    use ConstructorTrait;

    private ?HouseWithBuilder $house;

    public function __construct()
    {
        $this->house = $this->createObject(HouseWithBuilder::class);
        $this->meters(100);
        $this->numberOfWindows(3);
        $this->pool(false);
        $this->typeOfBricks('brick');
        $this->garden(false);
        $this->fireplace(false);
    }

    /**
     * @throws \Exception
     */
    public function getHouse(): HouseWithBuilder
    {
       $this->checkIfHouseIsValid();
       $result = $this->house;
       $this->reset();
       return $result;
    }

    /**
     * @throws \Exception
     */
    private function checkIfHouseIsValid(): void
    {
        $this->house->checkIfValid();
    }

    public function meters(int $meters): void
    {
        $this->house->setMeters($meters);
    }

    public function numberOfWindows(int $numberOfWindows): void
    {
       $this->house->setNumberOfWindows($numberOfWindows);
    }

    public function pool(bool $hasSwimmingPool): void
    {
        $this->house->setHasPool($hasSwimmingPool);
    }

    public function typeOfBricks(string $typeOfBricks): void
    {
        $this->house->setTypeOfBricks($typeOfBricks);
    }

    public function fireplace(bool $hasFireplace): void
    {
        $this->house->setHasFireplace($hasFireplace);
    }

    public function garden(bool $hasGarden): void
    {
        $this->house->setHasGarden($hasGarden);
    }

    public function reset(): void
    {
        $this->house = null;
    }
}