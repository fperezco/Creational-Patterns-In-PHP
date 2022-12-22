<?php

namespace App\Creational_Patterns\Builder_Pattern_House\Interfaces;

use App\Creational_Patterns\Builder_Pattern_House\Classes\HouseWithBuilder;

interface HouseBuilderInterface
{
    public function getHouse(): HouseWithBuilder;
    public function reset(): void;
    public function meters(int $meters): void;
    public function numberOfWindows(int $numberOfWindows): void;
    public function pool(bool $hasSwimmingPool): void;
    public function typeOfBricks(string $typeOfBricks): void;
    public function fireplace(bool $hasFireplace): void;
    public function garden(bool $hasGarden): void;
}