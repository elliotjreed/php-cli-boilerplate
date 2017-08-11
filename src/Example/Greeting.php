<?php
declare(strict_types=1);

namespace Example;

class Greeting
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): string
    {
        return 'Hello ' . $this->name . PHP_EOL;
    }
}
