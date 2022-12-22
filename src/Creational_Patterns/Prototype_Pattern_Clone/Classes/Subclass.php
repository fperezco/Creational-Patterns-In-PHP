<?php


namespace App\Creational_Patterns\Prototype_Pattern_Clone\Classes;


class Subclass
{
    private $string;

    public function __construct($message = "I am a subclass")
    {
        $this->string = $message;
    }

    /**
     * @return mixed|string
     */
    public function getString(): string
    {
        return $this->string;
    }

    /**
     * @param mixed|string $string
     */
    public function setString(string $string): void
    {
        $this->string = $string;
    }


}