<?php

namespace App\Creational_Patterns\Builder_Pattern_House\Traits;

use ReflectionClass;

trait ConstructorTrait
{
    protected function createObject(string $className, array $args = []): object
    {
        if (!in_array(static::class, $className::FRIEND_CLASSES)) {
            throw new \Exception("Call to private or protected {$className}::__construct() from invalid context");
        }
        $reflection = new ReflectionClass($className);
        $constructor = $reflection->getConstructor();
        $constructor->setAccessible(true);
        $object = $reflection->newInstanceWithoutConstructor();
        $constructor->invokeArgs($object, $args);
        return $object;
    }
}