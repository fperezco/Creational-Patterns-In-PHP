<?php

namespace App\Tests\Creational_Patterns\Prototype_Pattern_Clone;

use App\Creational_Patterns\Prototype_Pattern_Clone\Classes\ExampleClass;
use App\Creational_Patterns\Prototype_Pattern_Clone\Classes\Subclass;
use PHPUnit\Framework\TestCase;

class PrototypePatternTest extends TestCase
{

    public function test_that_cloned_object_has_different_references_to_internal_objects_like_date()
    {
        //GIVEN
        $prototypalClass1 = new ExampleClass();
        $subclassInside = new Subclass("initial subclass");
        $prototypalClass1->setReferenceASubclass($subclassInside);

        //WHEN
        $class2 = clone $prototypalClass1;

        //THEN
        $this->assertObjectsAreDifferent($prototypalClass1,$class2);
        $this->assertObjectsAreDifferent($prototypalClass1->getReferenceASubclass(),$class2->getReferenceASubclass());
        $this->assertObjectsAreDifferent($prototypalClass1->getDate(),$class2->getDate());
        //have different object but same value
        $this->assertEquals($prototypalClass1->getDate(),$class2->getDate());
    }

    private function assertObjectsAreDifferent(object $object1, object $object2)
    {
        $areEqual = false;
        if($object1 === $object2){
            $areEqual = true;
        }
        $this->assertFalse($areEqual);
    }
}