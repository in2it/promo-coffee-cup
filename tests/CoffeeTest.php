<?php
declare(strict_types=1);

namespace In2it\DrinksTest;

use In2it\Drinks\Coffee;
use PHPUnit\Framework\TestCase;

class CoffeeTest extends TestCase
{
    /**
     * @covers \In2it\Drinks\Coffee::__construct
     * @covers \In2it\Drinks\Coffee::isEmpty
     */
    public function testCoffeeIsFilledAtConstruct()
    {
        $coffee = new Coffee();
        $this->assertFalse($coffee->isEmpty());
    }

    /**
     * @covers \In2it\Drinks\Coffee::__construct
     * @covers \In2it\Drinks\Coffee::refill
     */
    public function testCoffeeCanNotBeRefilledWhileFull()
    {
        $this->expectException(\DomainException::class);
        $coffee = new Coffee();
        $coffee->refill();
        $this->fail('Coffee can not be refilled while full');
    }

    /**
     * @covers \In2it\Drinks\Coffee::__construct
     * @covers \In2it\Drinks\Coffee::drink
     */
    public function testCanNotDrinkFromAnEmptyCoffee()
    {
        $this->expectException(\DomainException::class);
        $coffee = new Coffee();
        $coffee->drink();
        $coffee->drink();
        $this->fail('Expected exception was not thrown when coffee was empty.');
    }

    /**
     * @covers \In2it\Drinks\Coffee::__construct
     * @covers \In2it\Drinks\Coffee::drink
     * @covers \In2it\Drinks\Coffee::isEmpty
     */
    public function testCoffeeEmptiesWhenPeopleDrinkFromIt()
    {
        $coffee = new Coffee();
        $coffee->drink();
        $this->assertTrue($coffee->isEmpty());
    }

    /**
     * @covers \In2it\Drinks\Coffee::__construct
     * @covers \In2it\Drinks\Coffee::drink
     * @covers \In2it\Drinks\Coffee::refill
     * @covers \In2it\Drinks\Coffee::isEmpty
     */
    public function testCoffeeIsFullAfterRefill()
    {
        $coffee = new Coffee();
        $coffee->drink();
        $coffee->refill();
        $this->assertFalse($coffee->isEmpty());
    }
}
