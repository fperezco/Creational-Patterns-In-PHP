<?php


namespace App\Creational_Patterns\Prototype_Pattern_Clone\Classes;


class ExampleClass
{
    private $integer;
    private $referenceASubclass;
    private $date;

    public function __construct()
    {
        $this->integer = 1;
        $this->referenceASubclass = new Subclass();
        $this->date = new \DateTime();
    }

    /**
     * @return int
     */
    public function getInteger(): int
    {
        return $this->integer;
    }

    /**
     * @param int $integer
     */
    public function setInteger(int $integer): void
    {
        $this->integer = $integer;
    }

    /**
     * @return Subclass
     */
    public function getReferenceASubclass(): Subclass
    {
        return $this->referenceASubclass;
    }

    /**
     * @param Subclass $referenceASubclass
     */
    public function setReferenceASubclass(Subclass $referenceASubclass): void
    {
        $this->referenceASubclass = $referenceASubclass;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    public function __clone()
    {
        //$this->integer = $this->integer; //not needed
        //we have to clone this object because, otherwise they will conserve
        //references to the original objects associated to the first object
        $this->date = clone $this->date;
        $this->referenceASubclass = clone $this->referenceASubclass;
        // Cloning an object that has a nested object with backreference
        // requires special treatment. After the cloning is completed, the
        // nested object should point to the cloned object, instead of the
        // original object.
    }


}