<?php

class PruebaTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $this->expectOutputRegex("/Escribe tu nombre: Hola, juan\n/");
        include 'pepe.php';
    }
}
