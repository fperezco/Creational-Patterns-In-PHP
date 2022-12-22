<?php

namespace App\Tests\Creational_Patterns\Builder_Pattern_House;

use App\Creational_Patterns\Builder_Pattern_House\Builders\ApartmentBuilder;
use App\Creational_Patterns\Builder_Pattern_House\Builders\GenericHouseBuilder;
use App\Creational_Patterns\Builder_Pattern_House\Classes\HouseWithBigConstructor;
use App\Creational_Patterns\Builder_Pattern_House\Classes\HouseWithBuilder;
use PHPUnit\Framework\TestCase;

class BuilderPatternTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function cant_call_house_constructor_outside_builder()
    {

        //THEN
        $this->expectException(\Throwable::class);
        //WHEN
        $house = new HouseWithBuilder();

    }

    /** @test */
    public function house_builder_set_as_the_right_way_parameters()
    {
        //GIVEN
        $builder = new GenericHouseBuilder();
        $builder->meters(201);
        $builder->numberOfWindows(5);
        $builder->pool(false);
        $builder->typeOfBricks('stone');
        $builder->garden(true);
        $builder->fireplace(false);

        //WHEN
        $house = $builder->getHouse();

        //THEN
        $this->assertEquals(201,$house->getMeters());
        $this->assertEquals(5,$house->getNumberOfWindows());
        $this->assertEquals(false,$house->isHasPool());
        $this->assertEquals(true,$house->isHasGarden());
        $this->assertEquals(false,$house->isHasFireplace());
    }

    /** @test */
    public function house_builder_execute_validations_as_well_so_cant_create_a_house_less_than_150_with_garden()
    {
        //GIVEN
        $builder = new GenericHouseBuilder();
        $builder->meters(140);
        $builder->numberOfWindows(5);
        $builder->pool(false);
        $builder->typeOfBricks('stone');
        $builder->garden(true);
        $builder->fireplace(false);

        //THEN
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("House must be bigger that 150 to have garden");

        //WHEN
        $builder->getHouse();
    }

     /** @test */
    public function custom_predefined_builder_as_apartment_work_as_expected_concerning_default_values()
    {
        //GIVEN
        $builder = new ApartmentBuilder();

        //WHEN
        $apartmentHouse = $builder->getHouse();

        //THEN
        $this->assertEquals(100,$apartmentHouse->getMeters());
        $this->assertEquals(3,$apartmentHouse->getNumberOfWindows());
        $this->assertEquals(false,$apartmentHouse->isHasPool());
        $this->assertEquals(false,$apartmentHouse->isHasGarden());
        $this->assertEquals(false,$apartmentHouse->isHasFireplace());
        $this->assertEquals('brick',$apartmentHouse->getTypeOfBricks());
    }
}