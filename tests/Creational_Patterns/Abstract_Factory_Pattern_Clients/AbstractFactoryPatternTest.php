<?php

namespace App\Tests\Creational_Patterns\Abstract_Factory_Pattern_Clients;

use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\ClientCode\ClientCodeAbstractFactory;
use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Factories\ConcreteCompanyEmailFactory;
use App\Creational_Patterns\Abstract_Factory_Pattern_Clients\Factories\ConcreteResidentialEmailFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryPatternTest extends TestCase
{
    /**
     * @var ConcreteCompanyEmailFactory|ConcreteResidentialEmailFactory
     */
    private ConcreteCompanyEmailFactory $concreteCompanyEmailFactory;
    private ConcreteResidentialEmailFactory $concreteResidentialEmailFactory;

    public function setUp(): void{
        $this->concreteCompanyEmailFactory  = new ConcreteCompanyEmailFactory();
        $this->concreteResidentialEmailFactory = new ConcreteResidentialEmailFactory();
        parent::setUp();
    }   

    /**
     * @test
     */
    public function concrete_company_email_factory_return_company_composed_email_as_expected()
    {
        //GIVEN
        $clientCode = new ClientCodeAbstractFactory($this->concreteCompanyEmailFactory);

        //WHEN
        $email = $clientCode->getEmail();
        $expectedEmail = $this->getCompanyExpectedEmail($email);

        //THEN
        $this->assertEquals($expectedEmail,$email);
    }

    /**
     * @test
     */
    public function residential_email_factory_return_residential_composed_email_as_expected()
    {
        //GIVEN
        $clientCode = new ClientCodeAbstractFactory($this->concreteResidentialEmailFactory);

        //WHEN
        $email = $clientCode->getEmail();
        $expectedEmail = $this->getResidentialExpectedEmail($email);

        //THEN
        $this->assertEquals($expectedEmail,$email);
    }

    private function getCompanyExpectedEmail(string $email): string
    {
        return "Hi company so we will make a discount of: 50% and Regards dear company customer";
    }

    private function getResidentialExpectedEmail(string $email): string
    {
        return "Hi residential friend so we will make a discount of: 10% and bye residential friend!!";
    }
}