<?php

namespace App\Creational_Patterns\Builder_Pattern_House\Builders;

use App\Creational_Patterns\Builder_Pattern_House\Classes\HouseWithBuilder;
use App\Creational_Patterns\Builder_Pattern_House\Interfaces\HouseBuilderInterface;
use App\Creational_Patterns\Builder_Pattern_House\Traits\ConstructorTrait;

class GenericHouseBuilder implements HouseBuilderInterface
{
    use ConstructorTrait;

    private ?HouseWithBuilder $house;

    public function __construct()
    {
        //$this->house = new HouseWithBuilder(); due to is protected, will not work anymore
        $this->house = $this->createObject(HouseWithBuilder::class);
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