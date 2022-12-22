<?php

namespace App\Creational_Patterns\Builder_Pattern_House\Classes;

/**
 * Version of the HouseClass without builder
 */
class HouseWithBigConstructor
{
    /**
     * @var int
     */
    private $meters;
    /**
     * @var int
     */
    private $numberOfWindows;
    /**
     * @var bool
     */
    private $hasSwimmingPool;
    /**
     * @var string
     */
    private $typeOfBricks;
    /**
     * @var bool
     */
    private $hasFireplace;
    /**
     * @var bool
     */
    private $hasGarden;

    /**
     * @throws \Exception
     */
    public function __construct(int $meters,int $numberOfWindows, bool $hasSwimmingPool,string $typeOfBricks,bool $hasFireplace, bool $hasGarden)
    {
        $this->meters = $meters;
        $this->numberOfWindows = $numberOfWindows;
        $this->hasSwimmingPool = $hasSwimmingPool;
        $this->typeOfBricks = $typeOfBricks;
        $this->hasFireplace = $hasFireplace;
        $this->hasGarden = $hasGarden;

        if($meters < 150 && $hasGarden){
            throw new \Exception("House must be bigger that 150 to have garden");
        }

        if($meters < 150 && $hasSwimmingPool){
            throw new \Exception("House must be bigger that 150 to have pool");
        }
    }

    /**
     * @return int
     */
    public function getMeters(): int
    {
        return $this->meters;
    }

    /**
     * @param int $meters
     */
    public function setMeters(int $meters): void
    {
        $this->meters = $meters;
    }

    /**
     * @return int
     */
    public function getNumberOfWindows(): int
    {
        return $this->numberOfWindows;
    }

    /**
     * @param int $numberOfWindows
     */
    public function setNumberOfWindows(int $numberOfWindows): void
    {
        $this->numberOfWindows = $numberOfWindows;
    }

    /**
     * @return bool
     */
    public function isHasPool(): bool
    {
        return $this->hasSwimmingPool;
    }

    /**
     * @param bool $hasSwimmingPool
     */
    public function setHasPool(bool $hasSwimmingPool): void
    {
        $this->hasSwimmingPool = $hasSwimmingPool;
    }

    /**
     * @return string
     */
    public function getTypeOfBricks(): string
    {
        return $this->typeOfBricks;
    }

    /**
     * @param string $typeOfBricks
     */
    public function setTypeOfBricks(string $typeOfBricks): void
    {
        $this->typeOfBricks = $typeOfBricks;
    }

    /**
     * @return bool
     */
    public function isHasFireplace(): bool
    {
        return $this->hasFireplace;
    }

    /**
     * @param bool $hasFireplace
     */
    public function setHasFireplace(bool $hasFireplace): void
    {
        $this->hasFireplace = $hasFireplace;
    }

    /**
     * @return bool
     */
    public function isHasGarden(): bool
    {
        return $this->hasGarden;
    }

    /**
     * @param bool $hasGarden
     */
    public function setHasGarden(bool $hasGarden): void
    {
        $this->hasGarden = $hasGarden;
    }

    public function show(): string
    {
        return "house with $this->meters meters...\n";
    }

}