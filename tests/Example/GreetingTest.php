<?php
declare(strict_types=1);

namespace Tests\Example;

use PHPUnit\Framework\TestCase;
use Example\Greeting;

class GreetingTest extends TestCase
{
    public function testItPrintsHello(): void
    {
        $greeting = new Greeting();

        $this->assertEquals('Hello', $greeting->sayHello());
    }
}
