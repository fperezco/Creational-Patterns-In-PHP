<?php

namespace App\Tests\Creational_Patterns\Singleton_Pattern_Log;

use App\Creational_Patterns\Singleton_Pattern_Log\Classes\Logger;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function test_that_in_Singleton_we_have_always_the_same_instance_of_the_class()
    {
        //GIVEN
        $l1 = Logger::getInstance();
        $l2 = Logger::getInstance();
        Logger::log("hola0");
        $l1->writeLog("hola");
        $l2->writeLog("hola2");

        //THEN
        $this->assertObjectsAreTheSame($l1, $l2);
        $this->assertObjectsAreTheSame($l1, Logger::getInstance());
        $this->assertObjectsAreTheSame($l2, Logger::getInstance());
    }

    private function assertObjectsAreTheSame(object $object1, object $object2)
    {
        $areEqual = false;
        if($object1 === $object2){
            $areEqual = true;
        }
        $this->assertTrue($areEqual);
    }
}